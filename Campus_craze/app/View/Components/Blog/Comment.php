<?php

namespace App\View\Components\Blog;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Comment extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $comment)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog.comment');
    }
}
