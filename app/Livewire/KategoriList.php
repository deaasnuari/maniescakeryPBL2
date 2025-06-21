<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kategori;

class KategoriList extends Component
{
    public $kategoriAktif = 6;

    public function mount()
    {
        $this->dispatch('kategoriTerpilih', id: $this->kategoriAktif);
    }

    public function setKategoriAktif($id)
    {
        $this->kategoriAktif = $id;
        $this->dispatch('kategoriTerpilih', id: $id);
    }

    public function render()
    {
        return view('livewire.kategori-list', [
            'kategori' => Kategori::all()
        ]);
    }
}

