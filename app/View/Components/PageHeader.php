<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $title;
    public string $subtitle;
    public string $tag;
    public string $image;
    public string $homeUrl;
    public string $homeLabel;
    public string $current;

    public function __construct(
        string $title = 'Default Title',
        string $subtitle = 'Default subtitle goes here.',
        string $tag = 'About',
        string $image = 'assets/hero-library.jpg',
        string $homeUrl = '/',
        string $homeLabel = 'Home',
        string $current = 'Page'
    ) {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->tag = $tag;
        $this->image = $image;
        $this->homeUrl = $homeUrl;
        $this->homeLabel = $homeLabel;
        $this->current = $current;
    }

    public function render()
    {
        return view('components.page-header');
    }
}