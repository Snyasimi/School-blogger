<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     */
/*	public string $title;
	public string $searchUrl;
	public array $tableHeaders;
 */
    public function __construct(public $title, public $searchUrl, public $tableHeaders)
    {
	    /*
	    $this->title = $title;
	    $this->searchUrl = $searchUrl;
	    $this->tableHeaders = $tableHeaders;
	     */
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.search');
    }
}
