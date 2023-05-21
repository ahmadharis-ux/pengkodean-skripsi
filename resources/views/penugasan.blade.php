<form action="/test_submit" method="post">
    @csrf

    {{-- inputan atas --}}
    <div>
        {{-- input combo box --}}
        {{-- <div class="row mb-3">
            <label class="col-sm-4 col-form-label">Nama guru (combo box)</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama_guru" list="daftarGuru">
                <datalist id="daftarGuru">
                    @foreach ($guru as $item)
                        <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                    @endforeach
                </datalist>
            </div>
        </div> --}}


        {{-- select guru --}}
        <div class="row mb-3">
            <label class="col-sm-4 col-form-label">Guru</label>
            <div class="col-sm-8">
                <select name="id_guru" class="form-select">
                    @foreach ($guru as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>

            </div>
        </div>

        {{-- select mapel --}}
        <div class="row mb-3">
            <label class="col-sm-4 col-form-label">Mata pelajaran</label>
            <div class="col-sm-8">
                <select name="id_mapel" class="form-select">
                    @foreach ($mapel as $item)
                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>



    <hr>

    {{-- inputan kelas --}}
    <div class="mb-3">
        <p class="fs-3 mt-5">Kelas</p>
    </div>

    <div class="border p-3">
        <div class="row">

            @foreach ($tingkat as $t)
            <div class="col">
                <div class="border p-3 mb-3">
                    {{-- toggle kelas X --}}
                    <div>
                        <input type="checkbox" class="btn-check toggle-kelas" id="cbKelas{{ $t->tingkat }}"
                            data-kelas="{{ $t->tingkat }}">
                        <label class="btn btn-outline-primary " for="cbKelas{{ $t->tingkat }}">Kelas
                            {{ $t->tingkat }}</label>
                    </div>
    
                    {{-- inputan kelas --}}
                    <div id="inputKelas-{{ $t->tingkat }}">
    
                        {{-- jumlah jam --}}
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Jumlah jam</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="jumlah_jam_kelas_{{ $t->tingkat }}"
                                    disabled>
                            </div>
                        </div>
    
                        {{-- pilihan kelas --}}
                        <div class="d-flex flex-column border p-3  rounded">
    
    
                            @foreach ($t->kelas as $kelas)
                                @php
                                    $namaKelas = $t->tingkat . ' ' . $kelas->nama . ' ' . $kelas->nomor;
                                    $idKelas = str_replace($namaKelas, ' ', '');
                                @endphp
    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        name="list_kelas_{{ $t->tingkat }}_terpilih[]" value="{{ $kelas->id }}"
                                        id="{{ $idKelas }}" disabled>
                                    <label class="form-check-label" for="{{ $idKelas }}">
                                        {{ $namaKelas }}
                                    </label>
                                </div>
                            @endforeach
    
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>





    </div>






    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>


<script>
    $(document).ready(function() {
        const cbKelasX = $("#cbKelasX")
        const cbKelasXI = $("#cbKelasXI")
        const cbKelasXII = $("#cbKelasXII")

        function handleToggleKelas(evt) {
            const isChecked = this.checked
            const kelasTerpilih = $(this).data('kelas')
            const container = `#inputKelas-${kelasTerpilih}`
            const inputs = $(container).find('input')

            if (isChecked) {
                for (let i = 0; i < inputs.length; i++) {
                    $(inputs[i]).removeAttr('disabled')
                }
            } else {
                for (let i = 0; i < inputs.length; i++) {
                    $(inputs[i]).attr('disabled', 'disabled')
                }
            }


        }

        cbKelasX.change(handleToggleKelas)
        cbKelasXI.change(handleToggleKelas)
        cbKelasXII.change(handleToggleKelas)
    })
</script>
