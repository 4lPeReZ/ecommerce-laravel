<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DropdownAlbums extends Component
{

    protected $listeners = ['render'];

    public function render()
    {
        return view('livewire.dropdown-albums');
    }
}
