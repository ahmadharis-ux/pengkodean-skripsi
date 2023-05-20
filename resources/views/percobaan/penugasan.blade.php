<form action="#" method="post">
    @csrf

    {{-- inputan atas --}}
    <div>
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
    </div>



    <hr>

    {{-- inputan kelas --}}
    <div class="mb-3">
        <p class="fs-3 mt-5">Kelas</p>
        {{-- <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck1">X</label>

            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck2">XI</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck3">XII</label>
        </div> --}}
    </div>

    <div class="border p-3">

        {{-- kelas X --}}
        <div class="border p-3 mb-3">
            {{-- toggle kelas X --}}
            <div>
                <input type="checkbox" class="btn-check toggle-kelas" id="cbKelasX" data-kelas="x">
                <label class="btn btn-outline-primary " for="cbKelasX">Kelas X</label>
            </div>

            {{-- inputan kelas x --}}
            <div id="inputKelas-x">

                {{-- jumlah jam --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Jumlah jam</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="jumlah_jam" disabled>
                    </div>
                </div>

                {{-- pilihan kelas --}}
                <div class="d-flex flex-column border p-3  rounded">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" disabled>
                        <label class="form-check-label" for="flexCheckDefault">
                            X RPL 1
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                        <label class="form-check-label" for="flexCheckChecked">
                            X RPL 2
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                        <label class="form-check-label" for="flexCheckChecked">
                            X RPL 69
                        </label>
                    </div>

                </div>
            </div>
        </div>


    </div>






    <button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>


<script>
    $(document).ready(function() {
        const cbKelasX = $("#cbKelasX")
        const cbKelasXI = $("#cbKelasXI")
        const cbKelasXII = $("#cbKelasXII")

        let onKelasX
        let onKelasXI
        let onKelasXII

        const inputKelasX = $("#inputKelasX")
        const inputKelasXI = $("#inputKelasXI")
        const inputKelasXII = $("#inputKelasXII")

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
        // cbKelasXI.change(handleToggleKelas)
        // cbKelasXII.change(handleToggleKelas)




    })
</script>
