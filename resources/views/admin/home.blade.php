@extends('layouts.admin')

@section('content')
<main class="main">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-block">
                    <div class="card-title-block">
                        <h3 class="title text-center">SISTEM PENDUKUNG KEPUTUSAN - SMP MUHAMMADIYAH 31 JAKARTA</h3>
                    </div>
                    <div class="head logo-sekolah">
                        <img src="{{ asset('assets/img_asset/logo.png') }}" alt="LOGO SEKOLAH" class="center">
                    </div>
                    <br>
                    <div class="body description-school text-justify">
                        SMP Muhammadiyah 31 Jakarta didirikan tanggal 2 Februari 1974. Tiga puluh tahun lalu lokasi kompleks pendidikan Muhammadiyah berbentuk rawa dan akhirnya sekarang menjadi Kompleks Pendidikan Perguruan Muhammadiyah Cabang Rawamangun.
                        Gedung SMP ini berdiri di bagian selatan kompleks perguruan.
                        Motto SMP Muhammadiyah 31 adalah: "Membentuk manusia yang cerdas, terampil, serta beriman dan bertaqwa kepada Allah SWT. Berakhlaq mulia, berguna bagi agama, bangsa, negara, masyarakat, dan tanah air tercinta."
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 25%;
}
</style>
@endsection
