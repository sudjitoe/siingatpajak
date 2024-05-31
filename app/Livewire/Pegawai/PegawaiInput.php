<?php

namespace App\Livewire\Pegawai;

use App\Livewire\Forms\PegawaiForm;
use Livewire\Component;

class PegawaiInput extends Component
{
    public PegawaiForm $form;
    public function render()
    {
        return view('livewire.pegawai.pegawai-input');
    }

    public function simpanData()
    {
        $this->form->simpan();
        $this->form->reset();
        $this->form->resetValidation();
        $this->dispatch('tutupModalForm');
        $this->dispatch('updateListPegawai');
    }
}
