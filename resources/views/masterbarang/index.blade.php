@extends('layouts.app')

@section('content')
<div class ="container">
<div class ="card border-0 shadow">
    <div class="card-body">
        <div class="d-flex mb-2p">
            <div class=mr-auto>
                
                <a href="{{route('master-barang.formulir-barang')}}" class="btn btn-info mr-2">Tambah Data Barang Baru</a>
                </div>
                <div class="d-flex">
                    <input type="date" name="id="class="form-control mr-2">
                    <button type="submit" class="btn btn-primary ml-2">Cari Data</button>
                </div>
                    </div>
                        <table class ="table table-striped">
                            <thead>
                                 <tr>
                                     <th>Kode Barang</th>
                                     <th>Nama Supplier</th>
                                     <th>Nama Barang</th>
                                     <th>Quantity</th>
                                     <th>Options</th>
                                 </tr>
                          </thead>
                     <tbody>
                                <tr>
                                    <td>NTR-29-2211-231</td>
                                    <td>PT GANTENK DOANK</td>
                                    <td>DIGANK</td>
                                    <td>86<td>
                                    <td>07-07-2007</td>
                                    <td>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href ="{{route('master-barang.show')}}" class="btn btn-warning btn-sm">Detail</a>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>UKK-22-1212-091</td>
                                    <td>PT NINJA</td>
                                    <td>FTCBR</td>
                                    <td>4<td>
                                    <td>09-09-2009</td>
                                    <td>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href ="{{route('master-barang.show')}}" class="btn btn-warning btn-sm">Detail</a>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>POS-918-291-022</td>
                                    <td>PT ALOKDISKON</td>
                                    <td>ALOK</td>
                                    <td>100<td>
                                    <td>08-08-2008</td>
                                    <td>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href ="{{route('master-barang.show')}}" class="btn btn-warning btn-sm">Detail</a>
                                        <a href ="{{route('master-barang.formulir-barang')}}" class="btn btn-danger btn-sm">Delete</a>
                                     </td>
                                 </tr>
                         </tbody>
                 </table>
           </div>
     </div>
</div>

@endsection