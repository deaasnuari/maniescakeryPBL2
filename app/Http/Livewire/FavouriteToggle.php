<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class FavouriteToggle extends Component
{
    public $productId;
    public $isFavourite;

    public function mount($productId, $isFavourite)
    {
        $this->productId = $productId;
        $this->isFavourite = $isFavourite;
    }

    public function toggleFavourite()
    {
        $product = Product::find($this->productId);

        if ($product) {
            $product->favourit = !$product->favourit;
            $product->save();
            $this->isFavourite = $product->favourit;
        }
    }

    public function render()
    {
        return view('livewire.favourite-toggle');
    }
}

