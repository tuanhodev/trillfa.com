<?php

namespace App\View\Components\Widget;

use Closure;
use App\Models\Blog\Post;
use App\Models\Blog\Topic;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TinThoitrangWidget extends Component
{
    /*
     * Nếu có curentPost thì không xuất hiện trong mục liên quan
     */
    public $currentPost;

    /*
     * giới hạn kết quả truy vấn
     */
    public $postsLimit;

    /*
     * danh sách bài đăng
     */
    public $posts;

    /*
    * nhận kiểu post để tìm kiếm
    */
    public $postType;

    /*
     * Tạo một thể hiện thành phần mới.
     */
    public function __construct($curentPost = '', $postType = 'post', $postsLimit = 12)
    {
        $this->currentPost = $curentPost;

        $this->postsLimit = $postsLimit;

        $this->postType = $postType;

        // Lay tin thoi trang
        $thoiTrangTopic = Topic::where('slug', 'thoi-trang-va-cuoc-song')->first();

        $topic = $thoiTrangTopic->children;

        $topicId = collect();

        foreach ($topic as $item) {
            $topicId = $topicId->push($item->id);
        }

        $this->posts = Post::whereHas('topics', function ($query) use ($topicId) {

            $query->whereIn('topic_id', $topicId);

        })->where('status', true)
          ->orderBy('id', 'desc')
          ->limit($this->postsLimit)->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.tin-thoitrang-widget');
    }
}
