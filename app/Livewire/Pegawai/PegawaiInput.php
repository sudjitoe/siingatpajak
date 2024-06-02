<?php

namespace App\Livewire\Pegawai;

use App\Livewire\Forms\PegawaiForm;
use App\Models\Pegawai;
use Livewire\Attributes\On;
use Livewire\Component;

class PegawaiInput extends Component
{
    public $simpan = true;
    public PegawaiForm $form;
    public function render()
    {
        return view('livewire.pegawai.pegawai-input');
    }

    public function simpanData()
    {
        if ($this->simpan) {
            $this->form->simpan();
        } else {
            $this->form->ubah();
        }
        $this->bersihkan();
    }

    public function bersihkan()
    {
        $this->form->reset();
        $this->simpan = true;
        $this->form->resetValidation();
        $this->dispatch('tutupModalForm');
        $this->dispatch('updateListPegawai');
    }

    #[On('getDataForm')]
    public function getDataForm(Pegawai $pegawai)
    {
        $this->form->getData($pegawai);
        $this->simpan = false;
        $this->dispatch('bukaModalForm');
    }

    #[On('hapusData')]
    public function hapusData(Pegawai $pegawai)
    {
        $this->form->hapus($pegawai);
        $this->bersihkan();
    }
}
