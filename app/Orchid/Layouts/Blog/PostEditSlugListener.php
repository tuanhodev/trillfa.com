<?php

namespace App\Orchid\Layouts\Blog;

use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Listener;
use Orchid\Screen\Repository;
use Orchid\Support\Facades\Layout;
use Illuminate\Support\Str;
use Orchid\Screen\Fields\Group;

class PostEditSlugListener extends Listener
{
    /**
     * List of field names for which values will be listened.
     *
     * @var string[]
     */
    protected $targets = [
        'title',
    ];

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    protected function layouts(): iterable
    {
        return [

            Layout::rows([

                Group::make([
                    Input::make('title')
                        ->required()
                        ->autofocus()
                        ->tabindex(1)
                        ->placeholder('Tiêu đề bài viết')
                        ->class('form-control'),

                    Input::make('slug')
                        ->required()
                        ->readonly()
                        ->class('form-control text-dark')
                        ->placeholder('Đường link thân thiện seo'),
                ]),
            ])
        ];
    }

    /**
     * Update state
     *
     * @param \Orchid\Screen\Repository $repository
     * @param \Illuminate\Http\Request  $request
     *
     * @return \Orchid\Screen\Repository
     */
    public function handle(Repository $repository, Request $request): Repository
    {
        $title = $request->input('title');

        return $repository
            ->set('title', $title)
            ->set('slug', Str::slug($title));
    }
}
