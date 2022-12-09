@extends('layouts.master')

@section('main')
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    
<div class="page-heading">
<div class="col-12 col-lg-3">
    <div class="card">
        <div class="card-body py-4 px-4">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl">
                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                </div>
                <div class="ms-3 name">
                    <h5 class="font-bold">Peony Nini</h5>
                    <h6 class="text-muted mb-0">@Peonyni</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="page-content">
<section class="row">
<div class="col-12 ">
    <div class="row">
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card" style="background-color: #7BEBA1;">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">                              
                            <h3 class="font-extrabold mb-0">112.000</h3>
                            <h6 class="font-bold mb-0">Pemasukan</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card" style="background-color: #FC7373;">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                            <h3 class="font-extrabold mb-0">183.000</h3>                            
                            <h6 class="font-bold mb-0">Pengeluaran</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 col-md-6">
            <div class="card" style="background-color: #64C9CF;">
                <div class="card-body px-4 py-4">
                    <div class="row">
                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7"> 
                            <h3 class="font-extrabold mb-0">80.000</h3>
                            <h6 class="font-bold mb-0">Netto</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>

<!--CHART BAR-->
<div class="card">
    <div class="card-header">
        <h3><strong>Data Penjualan</strong></h3>
    </div>
    <div class="card-body">
        <div id="bar"></div>
    </div>
</div>

<!--TABEL BARANG TERLARIS-->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> <strong>BARANG TERLARIS</strong> </h4>
                    </div>
                        <div class="card p-3">
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA BARANG</th>
                                        <th>QTY</th>
                                        <th>HARGA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-bold-500">1.</td>
                                        <td>Paha Ayam</td>
                                        <td class="text-bold-500">250</td>
                                        <td>45.000</td>
                                    <tr>
                                        <td class="text-bold-500">2.</td>
                                        <td>Dada Ayam</td>
                                        <td class="text-bold-500">175</td>
                                        <td>46.000</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/ui-apexchart.js"></script>
@endsection