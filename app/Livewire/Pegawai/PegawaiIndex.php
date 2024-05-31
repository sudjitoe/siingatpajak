<?php

namespace App\Livewire\Pegawai;

use App\Models\Pegawai;
use Livewire\Attributes\On;
use Livewire\Component;

class PegawaiIndex extends Component
{

    public $sortField = 'id';
    public $sortAsc = true;

    public $search = '';
    public $perPage = 5;

    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    #[On('updateListPegawai')]
    public function updatedList()
    {
    }

    public function render()
    {
        return view('livewire.pegawai.pegawai-index', [
            'pegawais' => Pegawai::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate($this->perPage != 0 ? $this->perPage : Pegawai::count()),
        ]);
    }
}
