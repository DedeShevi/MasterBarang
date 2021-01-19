@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="alert alert-info" role="alert"> Ini Adalah Data Tranksaksi terakhir </div>
</div>
</div>
<div class="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class="mr-auto">
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Barang Masuk</a>
                <a href="{{route('transaksi.barang-keluar')}}" class="btn btn-danger">Tambah Transaksi Keluar</a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Supplier</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                    <th>Tgl Transaksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NTR-29-2211-231</td>
                    <td>PT GANTENK DOANK</td>
                    <td>DIGANK</td>
                    <td>86<td>
                    <td>11-11-2011</td>
                   
                </tr>
                <tr>
                    <td>UKK-22-1212-091</td>
                    <td>PT NINJA</td>
                    <td>FTCBR</td>
                    <td>4<td>
                    <td>09-09-2009</td>
                    
                </tr>
                <tr>
                    <td>POS-918-291-022</td>
                    <td>PT ALOKDISKON</td>
                    <td>ALOK</td>
                    <td>100<td>
                    <td>08-08-2008</td>
                   
                </tr>
            </tbody>
        </table>    
    </div>
</div>
</div>

@endsection
