<?php

namespace App\View\Components\Widget;

use App\Models\Blog\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeaturedWidget extends Component
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
    * Xác định xem cá phải là nổi bật hay không
    */
    public $featured;

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
    public function __construct($curentPost = '', $postType = 'post', $postsLimit = 12, $featured = 'false')
    {
        $this->currentPost = $curentPost;

        $this->postsLimit = $postsLimit;

        $this->postType = $postType;

        $this->featured = $featured;

        if ($this->featured == 'false') {

            $this->posts = Post::where('status', true)
                ->where('post_type', $this->postType)
                ->orderBy('id', 'desc')->limit($this->postsLimit)->get();

        } elseif ($this->featured == 'true') {
            $this->posts = Post::where('status', true)
                ->where('featured', true)
                ->where('post_type', $this->postType)
                ->orderBy('id', 'desc')->limit(9)->get();
        }

    }

    /*
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget.featured-widget');
    }
}
