<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $sortBy = 'created_at';
    public $sortDir = 'DESC';
    public $search = '';
    public $currentUrl;

    public function setSortBy($sortColumn)
    {
        if ($this->sortBy == $sortColumn) {
            $this->sortDir = ($this->sortDir == 'ASC') ? 'DESC' : 'ASC';
            return;
        }
    }

    public function render()
    {
        $currentUrl = url()->current();
        $explodeUrl = explode('/', $currentUrl);

        $this->currentUrl = $explodeUrl[3];

        return view('livewire.product-table', [
            'products' => Product::with('category')->search($this->search)->orderBy($this->sortBy, $this->sortDir)->paginate($this->perPage)
        ]);
    }
}
