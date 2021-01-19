<?php

namespace App\Http\Controllers\Transaksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasterBarangController extends Controller
{
    public function index()
    {
        return view('masterbarang.index');
    }
}
