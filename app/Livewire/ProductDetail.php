<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    public function mount($product_id){
        $this->product = Product::find($product_id);
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
        return view('livewire.product-detail');
    }
}
