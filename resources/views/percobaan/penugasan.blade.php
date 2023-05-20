<form action="#" method="post">
    @csrf

    {{-- input combo box --}}
    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">Nama guru (combo box)</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="nama_guru" list="daftarGuru">
            <datalist id="daftarGuru">
                @foreach ($guru as $item)
                    <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                @endforeach
            </datalist>
        </div>
    </div>


    {{-- select guru --}}
    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">Guru</label>
        <div class="col-sm-8">
            <select name="nama_guru" class="form-select">
                @foreach ($guru as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>

        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">Mata pelajaran</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="mata_pelajaran">
        </div>
    </div>

    <hr>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
