<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Cover extends Component
{
   /**
     * Create the component instance.
     *
     * @param  string  $type
     * @return void
     */
    /**
     * The alert type.
     *
     * @var string
     */
    
    public $judul;
    public function __construct($judul)
    {
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cover');
    }
}
