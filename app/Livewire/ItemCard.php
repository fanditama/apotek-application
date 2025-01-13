<?php

namespace App\Livewire;

use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ItemCard extends Component
{
    public $product;

    public function mount($product_details)
    {
        $this->product = $product_details;
    }

    public function placeholder()
    {
        return view('livewire.skeleton.item-skeleton');
    }

    public function addToCart($productId)
    {
        $cartItems = ShoppingCart::where('user_id', Auth::id())->where('product_id', $productId)->first();

        if ($cartItems) {
            $cartItems->quantity += 1;
            $cartItems->save();
        } else {
            ShoppingCart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1, 
            ]);
        }

        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.item-card');
    }
}
