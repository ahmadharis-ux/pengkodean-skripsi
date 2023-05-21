<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Tingkat;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tingkat = [
            ["tingkat" => "X"],
            ["tingkat" => "XI"],
            ["tingkat" => "XII"],
        ];
        foreach ($tingkat as $val){
            Tingkat::insert([
                "tingkat" => $val["tingkat"],
                "created_at" => Carbon::now(), "updated_at" => Carbon::now(),
            ]);
        }

        $kelas = [
            ["tingkat_id" => "1","nama" => "RPL", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "RPL", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "TKJ", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "TKJ", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "TKJ", "nomor" => "3","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AK", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AK", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AK", "nomor" => "3","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AK", "nomor" => "4","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AP", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AP", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AP", "nomor" => "3","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AP", "nomor" => "4","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "AP", "nomor" => "5","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "PS", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "PS", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "1","nama" => "PS", "nomor" => "3","lokasi" => "LB"],
            
            ["tingkat_id" => "2","nama" => "RPL", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "RPL", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "TKJ", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "TKJ", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "TKJ", "nomor" => "3","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AK", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AK", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AK", "nomor" => "3","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AK", "nomor" => "4","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AP", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AP", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AP", "nomor" => "3","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AP", "nomor" => "4","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "AP", "nomor" => "5","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "PS", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "PS", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "2","nama" => "PS", "nomor" => "3","lokasi" => "LA"],

            ["tingkat_id" => "3","nama" => "RPL", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "RPL", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "TKJ", "nomor" => "1","lokasi" => "LA"],
            ["tingkat_id" => "3","nama" => "TKJ", "nomor" => "2","lokasi" => "LA"],
            ["tingkat_id" => "3","nama" => "TKJ", "nomor" => "3","lokasi" => "LA"],
            ["tingkat_id" => "3","nama" => "AK", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AK", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AK", "nomor" => "3","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AK", "nomor" => "4","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AP", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AP", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AP", "nomor" => "3","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AP", "nomor" => "4","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "AP", "nomor" => "5","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "PS", "nomor" => "1","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "PS", "nomor" => "2","lokasi" => "LB"],
            ["tingkat_id" => "3","nama" => "PS", "nomor" => "3","lokasi" => "LB"],
        ];
        foreach ($kelas as $val){
            Kelas::insert([
                "tingkat_id" => $val["tingkat_id"],
                "nama" => $val["nama"],
                "nomor" => $val["nomor"],
                "lokasi" => $val["lokasi"],
                "created_at" => Carbon::now(), "updated_at" => Carbon::now(),
            ]);
        }

        $guru = [
            ["nama" => "Lilis Aisah, S.Pd"],
            ["nama" => "Ati Latifah, M.Pd."],
            ["nama" => "Euis Suhartini, S.Pd"],
            ["nama" => "Dra. Tik Sondari"],
            ["nama" => "Drs. Heri Siswanto"],
            ["nama" => "Dra. Agustina Soetedjo"],
           ["nama" => " Drs. Suherman"],
           ["nama" => " Dra. Eni Tarmini"],
            ["nama" => "Gini Roliah, S. Pd"],
            ["nama" => "Ridna Ardiana, M. Pd"],
            ["nama" => "Nurahman, S. Pd"],
            ["nama" => "Yuyun Kurniasari, M. Pd"],
            ["nama" => "Srina Afriani, S.Pd"],
            ["nama" => "R. Siti Malihah, S.E."],
            ["nama" => "Sri Rahayu, S.Pd."],
            ["nama" => "Ernis Hendrawati, M.Kom."],
            ["nama" => "Hinda Gumiarti, M.Pd."],
            ["nama" => "Yusup Suheri, M.Pd."],
            ["nama" => "Erni Wardhani, M.Pd."],
            ["nama" => "Imas Fahitah, S.E., M.M."],
            ["nama" => "Yeni Sukmawati, M.Pd"],
            ["nama" => "Aceu Nurlaela, M. Pd"],
           ["nama" => " Rini Anggraini, S. Pd"],
            ["nama" => "Evi Sylvia, S.H., M.Pd."],
            ["nama" => "Syarif Hidayat, S.Ag."],
            ["nama" => "Sidik Sumartono, S.T."],
            ["nama" => "Rubaetul Adawiyah, S.Pd."],
            ["nama" => "Ani Ismayani, M.Pd."],
            ["nama" => "A.Luddie Tri S., S.T."],
            ["nama" => "Pipit Pitriawati, S.Pd."],
            ["nama" => "Devi Nurniawati, S.Pd."],
            ["nama" => "Eva Yuliani, S.Pd."],
            ["nama" => "Novi Siswayanti, S.Pd."],
            ["nama" => "A. Rahmat Dimyati, M.Pd."],
            ["nama" => "Renny Fachmiwati, S. Kom. Gr"],
            ["nama" => "Nanda Ardiyanta, S.Pd."],
            ["nama" => "Tini Murtiningsih, S. Pd"],
            ["nama" => "Fuji Santika, S. ST"],
            ["nama" => "Edy Mulyana, S.Pd"],
            ["nama" => "Ngatoilah, S.Kom."],
            ["nama" => "Mariam Hidayat, S.Pd"],
            ["nama" => "Yadi Hidayat, S.Mn.,S.E.,Gr"],
           ["nama" => " Marsono, S. E"],
            ["nama" => "Yaqub Hadi Permana, S.T."],
            ["nama" => "Wati Nopianti, S.Pd."],
            ["nama" => "Puspa Rini Agustina, S. Pd"],
            ["nama" => "Rosalina Yulianti, S.Pd."],
            ["nama" => "Deden Mulyana, S.T."],
            ["nama" => "Susi Sri Wahyuni, S.Pd."],
            ["nama" => "Hadi Heriyadi, S.ST."],
            ["nama" => "Yayat Ruhiyat, S. ST"],
            ["nama" => "Beny Lukman F., S. Pd"],
            ["nama" => "Asti Purnamasari, M. Pd"],
            ["nama" => "Fitriyane LAR, M.Pd."],
            ["nama" => "Astri Pratiwi, S.Pd."],
            ["nama" => "Ginanjar Alif Efendi, S. Pd"],
            ["nama" => "Sarah Siti Sumaerah, S. T"],
            ["nama" => "Fajar M. Sukmawijaya, M.Kom"],
            ["nama" => "Neng Rinrin, S. Pd"],
            ["nama" => "Bambang Jati Tunggal, S.T."],
            ["nama" => "Intan Nurulita, S.Pd."],
            ["nama" => "Tiara Rachelia, S. Pd"],
            ["nama" => "Senja Ade Restiani, S.Pd."],
            ["nama" => "M. Alvi Irpansyah, S.A.B."],
            ["nama" => "Wulan Dwiyanti Rahayu, S.Pd."],
            ["nama" => "Yuan Hendarsah, S.S."],
            ["nama" => "Maria Nurma'rifa, S.Pd.I."],
            ["nama" => "M. Isa Assidiqi, S.E."],
            ["nama" => "Dikdik Juanda, S.Pd.I., M.M.Pd."],
            ["nama" => "Irma Rahmawati, S.E. "],
            ["nama" => "Ismi Yusanti, S.Pd. "],
            ["nama" => "Leni Haryani, S.S."],
            ["nama" => "Fahmi Jatnika, S.Pd."],
            ["nama" => "Mayang Munggaran, S.Pd."],
            ["nama" => "M. Ridwan Hadikusumah, S.Pd."],
            ["nama" => "Agus Yudianto, M.Pd."],
            ["nama" => "Ginanjar Prapta M., S.Pd."],
            ["nama" => "Lina Zakiah, S.Pd.I."],
            ["nama" => "Diny Silviana Sari, S.Pd. "],
            ["nama" => "Dina Agustina, S.Pd. "],
            ["nama" => "Nita Gantini Gunawan, S.Pd. "],
            ["nama" => "Randa Yuga, S.Pd."],
            ["nama" => "Muhammad Haris Anwari, S. E "],
            ["nama" => "Abdul Jabar, S.T. "],
            ["nama" => "Dewi Kania, S.Pd. "],
            ["nama" => "Zahara Amalia Ginanjar, M.E."],
            ["nama" => "Noor Maulida Rusgianti, S.Pd."],
            ["nama" => "Putri Awaliyah, S.Pd."],
            ["nama" => "Drs. H. Tedi Herdiansah"],
        ];
        foreach($guru as $val){
            Guru::insert([
                "nama" => $val["nama"],
                "created_at" => Carbon::now(), "updated_at" => Carbon::now(),
            ]);
        }

        $mapel=[
            ["nama" => "PAB"],
            ["nama" => "Pendidikan Pancasila"],
            ["nama" => "Bahasa Indonesia"],
            ["nama" => "PJOK"],
            ["nama" => "Sejarah Indonesia"],
            ["nama" => "Seni Budaya"],
            ["nama" => "Bahasa Sunda"],
            ["nama" => "Matematika"],
            ["nama" => "Bahasa Inggris"],
            ["nama" => "Kejuruan Informatika"],
            ["nama" => "Proyek IPAS"],
            ["nama" => "Produk Kreatif dan Kewirausahaan"],
            ["nama" => "Bimbingan Konseling"],
            ["nama" => "OTK Kepegawaian"],
            ["nama" => "OTK Keuangan"],
            ["nama" => "OTK Sarana dan Prasarana"],
            ["nama" => "OTK Hunas dan Keprotokolan"],
            ["nama" => "Dasar Program Keahlian MPLB"],
            ["nama" => "Praktikum Akuntansi Perusahaan Jasa Dagang dan Manufaktur"],
            ["nama" => "Praktikum Akuntansi keuangan Lembaga"],
            ["nama" => "Akuntansi Keuangan"],
            ["nama" => "Komputer Akuntansi MYOB"],
            ["nama" => "Administrasi Pajak"],
            ["nama" => "Dasar program Keahlian Akuntansi"],
            ["nama" => "Informatika"],
            ["nama" => "Penataan Produk"],
            ["nama" => "Bisnis Online"],
            ["nama" => "Pengelolaan Bisnis Ritel"],
            ["nama" => "Administrasi transaksi"],
            ["nama" => "Dasar Program Keahlian PS"],
            ["nama" => "Pemodelan Perangkat Lunak"],
            ["nama" => "Basis data"],
            ["nama" => "Pemrograman Berorientasi Objek"],
            ["nama" => "Pemrograman web dan Perangkat Lunak"],
            ["nama" => "Dasar Program Keahlian PPLG"],
            ["nama" => "Teknologi jaringan berbasis Luas (WAN)"],
            ["nama" => "Administrasi Infrastruktur Jaringan"],
            ["nama" => "Teknologi Layanan Jaringan"],
            ["nama" => "Administrasi Sistem Jaringan"],
            ["nama" => "Dasar Program Keahlian TJKT"],
        ];
        foreach($mapel as $val){
            Mapel::insert([
                "nama" => $val["nama"],
            ]);
        }
    }
}
