<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- jquery --}}
    <script src="{{ asset('assets/jquery.min.js') }}"></script>
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        <label for="">Kelas</label>
                    </div>
                    <div class="card-body">
                        {{-- <table class="table">
                            <thead>
                                <tr>
                                    <td>Tingkat</td>
                                    <td>Kelas</td>
                                    <td>No Kelas</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $item)
                                    <tr>
                                        <td>{{ $item->tingkat->tingkat }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nomor }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-header">
                        <label for="">Guru</label>
                    </div>
                    <div class="card-body">
                        {{-- <table class="table">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="card">
                    <div class="card-header">
                        <label for="">Mapel</label>
                    </div>
                    <div class="card-body">
                        {{-- <table class="table">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mapel as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <label for="">Jam</label>
                    </div>
                    <div class="card-body">
                        <form action="/jam" method="post">
                            @csrf
                            <div class="row mx-2 my-2">
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="senin" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Senin
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="selasa" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Selasa
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="rabu" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Rabu
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="kamis" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kamis
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="jumat" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Jumat
                                    </label>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row mb-2 mx-2 my-2">
                                    <div class="col">
                                        <label for="">Jumlah Jam</label>
                                        <input type="number" name="jumlah_sesi" class="form-control mt-2">
                                    </div>
                                    <div class="col">
                                        <label for="">Waktu persatu Jam pelajaran</label>
                                        <div class="row mx-2">
                                            <input type="number" name="waktu_sesi" class="form-control col mt-2" id="">
                                            <label for="" class="col mt-2">Menit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="mx-2 my-2">
                                    <label for="">Jam Mulai</label>
                                    <input type="time" name="waktu_mulai" class="form-control mt-2">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-md mx-2 my-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-header">
                        <label for="">Jadwal Khusus</label>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row mx-2 my-2">
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="senin" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Senin
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="selasa" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Selasa
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="rabu" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Rabu
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="kamis" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Kamis
                                    </label>
                                </div>
                                <div class="form-check col">
                                    <input class="form-check-input" name="hari[]" type="checkbox" value="jumat" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Jumat
                                    </label>
                                </div>
                            </div>
                            <div class="card">
                                <div class="row mb-2 mx-2 my-2">
                                    <div class="col">
                                        <label for="">Jumlah Jam</label>
                                        <input type="text" name="jumlah_sesi" class="form-control mt-2">
                                    </div>
                                    <div class="col">
                                        <label for="">Waktu persatu Jam pelajaran</label>
                                        <div class="row mx-2">
                                            <input type="number" name="waktu_sesi" class="form-control col mt-2" name="" id="">
                                            <label for="" class="col mt-2">Menit</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="mx-2 my-2">
                                    <label for="">Jam Mulai</label>
                                    <input type="time" name="waktu_mulai" class="form-control mt-2">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-md mx-2 my-2" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <label for="">Penugasan Guru</label>
                    </div>
                    <div class="card-body">

                        {{-- @include('percobaan.penugasan') --}}
                        @include('penugasan')
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card">
                    <label for="">Senin</label>
                    <table>
                        <thead>
                            <tr>
                                <th>Sesi</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jumlahSesi = 12;
                            $waktuMulai = '07:00';
                            $waktuPerSesi = 40;
                            $menitPerSesi = 0;
                    
                            for ($sesi = 1; $sesi <= $jumlahSesi; $sesi++) {
                                $waktuSelesai = date('H:i', strtotime($waktuMulai . " +{$waktuPerSesi} minutes"));
                                echo "<tr>";
                                echo "<td>Sesi $sesi</td>";
                                echo "<td>$waktuMulai</td>";
                                echo "<td>$waktuSelesai</td>";
                                echo "</tr>";
                    
                                $waktuMulai = $waktuSelesai;
                                $menitPerSesi += $waktuPerSesi;
                                $jam = floor($menitPerSesi / 60);
                                $menit = $menitPerSesi % 60;
                                $waktuMulai = date('H:i', strtotime($waktuMulai . " +{$jam} hours +{$menit} minutes"));
                            }
                            ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
