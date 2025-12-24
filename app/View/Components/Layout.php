<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Layout extends Component
{
    /**
     * SEO properties
     */
    public ?string $title;
    public ?string $description;
    public ?string $keywords;
    public ?string $ogType;

    /**
     * Create a new component instance.
     */
    public function __construct(
        ?string $title = null,
        ?string $description = null,
        ?string $keywords = null,
        ?string $ogType = 'website'
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->ogType = $ogType;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.layout');
    }
}
