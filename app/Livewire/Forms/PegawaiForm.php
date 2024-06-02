<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Pegawai;
use Livewire\Attributes\Validate;

class PegawaiForm extends Form
{
    #[Validate('required|min:5')]
    public $nip = '';
    #[Validate('required|min:2')]
    public $nama = '';
    #[Validate('required')]
    public $jenis_kelamin = '';
    public $id_telegram = '';

    public ?Pegawai $pegawai;

    public function simpan()
    {
        $this->validate();

        $simpan = Pegawai::create([
            'nip' => $this->nip,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'id_telegram' => $this->id_telegram,
        ]);

        return $simpan;
    }

    public function getData(Pegawai $pegawai)
    {
        $this->pegawai = $pegawai;
        $this->nip = $pegawai->nip;
        $this->nama = $pegawai->nama;
        $this->jenis_kelamin = $pegawai->jenis_kelamin;
        $this->id_telegram = $pegawai->id_telegram;
    }

    public function ubah()
    {
        $this->validate();
        $ubah = $this->pegawai->update([
            'nip' => $this->nip,
            'nama' => $this->nama,
            'jenis_kelamin' => $this->jenis_kelamin,
            'id_telegram' => $this->id_telegram,
        ]);

        return $ubah;
    }

    public function hapus(Pegawai $pegawai)
    {
        $hapus = $pegawai->delete();
        return $hapus;
    }
}
