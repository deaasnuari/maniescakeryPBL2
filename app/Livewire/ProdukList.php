<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Produk;

class ProdukList extends Component
{
    public $kategoriId = 6;
    public $products = [];

    protected $listeners = ['kategoriTerpilih' => 'filterByKategori'];

    public function mount()
    {
        $this->products = Produk::where('kategori', $this->kategoriId)->get();
    }

    public function filterByKategori($id)
    {
        $this->kategoriId = $id;
        $this->products = Produk::where('kategori', $id)->get();
    }

    public function render()
    {
        return view('livewire.produk-list');
    }
}

