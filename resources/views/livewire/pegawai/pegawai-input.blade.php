<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLarge">Form Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input wire:model='form.nip' type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input wire:model='form.nama' type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select wire:model='form.jenis_kelamin' name="" id="" class="form-control">
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">ID Telegram</label>
                        <input wire:model='form.id_telegram' type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button wire:click="bersihkan" class="btn btn-danger btn-pill" data-dismiss="modal">Batal</button>
            <button wire:click='simpanData'
                class="btn btn-{{ $simpan ? 'primary' : 'warning' }} btn-pill">{{ $simpan ? 'Simpan' : 'Ubah' }}</button>
        </div>
    </div>
</div>
