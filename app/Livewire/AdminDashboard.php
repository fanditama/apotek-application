<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDashboard extends Component
{
    public $current_url;

    public function render()
    {
        $current_url = url()->current();
        $explode_url = explode('/', $current_url);
        $this->current_url = $explode_url[3]. ' ' . $explode_url[4];

        return view('livewire.admin-dashboard')->layout('admin-layout');
    }
}
