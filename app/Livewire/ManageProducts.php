<?php

namespace App\Livewire;

use Livewire\Component;

class ManageProducts extends Component
{
    public function render()
    {
        return view('livewire.manage-products')->layout('admin-layout');
    }
}
