<?php

namespace App\View\Components\User\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Posts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $posts)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.profile.posts');
    }
}
