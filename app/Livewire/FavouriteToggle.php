<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produk;

class FavouriteToggle extends Component
{
    public $productId;
    public $isFavourite = false;

    public function mount($productId)
    {
        $this->productId = $productId;
        $produk = Produk::find($this->productId);
        $this->isFavourite = $produk && $produk->favourit == 1;
    }

    public function toggleFavourite()
    {
        $produk = Produk::find($this->productId);

        if ($produk) {
            $produk->favourit = $produk->favourit ? 0 : 1; // toggle
            $produk->save();

            $this->isFavourite = $produk->favourit;
        }
    }

    public function render()
    {
        return view('livewire.favourite-toggle');
    }
}
