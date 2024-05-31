@section('judul', 'Data Pegawai')
<div class="content">
    <div class="breadcrumb-wrapper">
        <h1>@yield('judul')</h1>

    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>Tabel @yield('judul')</h2>
                    <div class="ml-15">
                        <button wire:click='bukaModal' class="btn btn-sm btn-primary">Tambah</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col form-inline">
                            Tampil : &nbsp;
                            <select wire:model.live='perPage' name="perPage" id="perPage" class="form-control">
                                <option value="5">5</option>
                                <option value="5">10</option>
                                <option value="5">15</option>
                                <option value="5">25</option>
                                <option value="0">Semua</option>
                            </select>
                        </div>
                        <div class="col">
                            <input wire:model.live='search' type="search" class="form-control"
                                placeholder="Cari Data...">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"><a wire:click="sortBy('id')" href="#"
                                        class="text-center align-middle" role="button"></a>
                                    #
                                    @include('includes._sort-icon', [
                                        'field' => 'id',
                                    ])
                                </th>
                                <th scope="col"><a wire:click="sortBy('nip')" href="#"
                                        class="text-center align-middle" role="button"></a>
                                    NIP
                                    @include('includes._sort-icon', [
                                        'field' => 'nip',
                                    ])
                                </th>
                                <th scope="col"><a wire:click="sortBy('nama')" href="#"
                                        class="text-center align-middle" role="button"></a>
                                    Nama
                                    @include('includes._sort-icon', [
                                        'field' => 'nama',
                                    ])
                                </th>
                                <th scope="col"><a wire:click="sortBy('jenis_kelamin')" href="#"
                                        class="text-center align-middle" role="button"></a>
                                    Jenis Kelamin
                                    @include('includes._sort-icon', [
                                        'field' => 'jenis_kelamin',
                                    ])
                                </th>
                                <th scope="col"><a wire:click="sortBy('id_telegram')" href="#"
                                        class="text-center align-middle" role="button"></a>
                                    ID Telegram
                                    @include('includes._sort-icon', [
                                        'field' => 'id_telegram',
                                    ])
                                </th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pegawais as $pegawai)
                                <tr>
                                    <td>{{ $pegawai->id }}</td>
                                    <td>{{ $pegawai->nip }}</td>
                                    <td>{{ $pegawai->nama }}</td>
                                    <td>{{ $pegawai->jenis_kelamin }}</td>
                                    <td>{{ $pegawai->id_telegram }}</td>
                                    <td>Aksi</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            @livewire('pegawai.pegawai-input')
        </div>
    </div>
</div>
@push('script')
    <script>
        window.addEventListener('bukaModalForm', event => {
            $('#formModal').modal('show');
        })

        window.addEventListener('tutupModalForm', event => {
            $('#formModal').modal('hide');
        })
    </script>
@endpush
