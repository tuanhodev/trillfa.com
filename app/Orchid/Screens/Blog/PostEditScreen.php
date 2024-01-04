<?php

namespace App\Orchid\Screens\Blog;

use App\Http\Requests\Blog\PostRequest;
use App\Models\Blog\Post;
use App\Orchid\Layouts\Blog\PostEditOptionsLayout;
use App\Orchid\Layouts\Blog\PostEditSeoLayout;
use App\Orchid\Layouts\Blog\PostEditSlugListener;
use App\Orchid\Layouts\Blog\PostEditStatusLayout;
use App\Orchid\Layouts\Blog\PostEditThumbnailLayout;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PostEditScreen extends Screen
{
    public $post;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Post $post): iterable
    {
        return [

            'post' => $post,
            'title' => $post->title ?? '',
            'slug' => $post->slug ?? '',
            'tag' => $post->tags ?? '',
            'topic' => $post->topics ?? '',
            'collection' => $post->topics ?? '',
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->post->title ?? 'Thêm bài mới';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {

        return [

            Button::make(__('Xóa'))
                ->icon('bs.trash3')
                ->confirm(__('Đang thực hiện xóa bài viết?'))
                ->method('destroy')
                ->canSee($this->post->exists),

            Button::make(__('Lưu'))
                ->icon('bs.check-circle')
                ->method('createOrUpdate'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [

            Layout::wrapper('platform.template.content-container', [

                'mainContent' => [
                    PostEditSlugListener::class,
                    Layout::rows([
                        Input::make('post.id')->hidden(),
                        SimpleMDE::make('post.content')
                            ->tabindex(2)
                            ->autocomplete()
                            ->placeholder('Nội dung chính'),
                    ]),
                    PostEditSeoLayout::class,
                ],

                'rightBar' => [
                    PostEditStatusLayout::class,
                    PostEditOptionsLayout::class,
                    PostEditThumbnailLayout::class,
                ],
            ]),
        ];
    }

    public function createOrUpdate(PostRequest $request)
    {
        $data = $request->validated();

        $postData = $data['post'];

        $titleData = $data['title'];

        $slugData = $data['slug'];

        $mergePost = array_merge($postData, [
            'user_id' => Auth::user()->id,
            'title' => $titleData,
            'slug' => $slugData,
        ]);

        $tagData = $request->get('tag');

        $topicData = $request->get('topic');

        if ($request->get('collection')) {

            $topicData = $request->get('collection');

            $postData['post_type'] = 'collection';

        }

        $postId = $request->input('post.id');

        $postSave = Post::updateOrCreate(['id' => $postId], $mergePost);

        $postSave->topics()->sync($topicData);

        $postSave->tags()->sync($tagData);

        Toast::info('Lưu thành công');

        return redirect()->route('blog.posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        Toast::info('Xóa thành công');

        return redirect()->route('blog.posts');
    }
}
