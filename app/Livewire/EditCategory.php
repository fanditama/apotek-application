<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;
    public $currentUrl;
    public $category_name = '';
    public $category_details;

    public function mount($id)
    {
        $this->category_details = Category::find($id);
        $this->category_name = $this->category_details->name;
    }

    public function update()
    {
        //validation 
        $this->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $this->category_details->update([
            'name' => $this->category_name,
        ]);

        return $this->redirect('/categories', navigate: true);
    }

    public function render()
    {
        return view('livewire.edit-category')->layout('admin-layout');
    }
}
