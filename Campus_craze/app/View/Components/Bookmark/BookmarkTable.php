<?php

namespace App\View\Components\Bookmark;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookmarkTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $bookmarks)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bookmark.bookmark-table');
    }
}
