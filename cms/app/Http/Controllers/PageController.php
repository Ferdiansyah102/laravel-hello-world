<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nama : Ferdiansyah Wardana Putra <br/>";
        echo "NIM : 2041720060  <br/>";
        echo "Kelas : TI 2H <br/>";
    }

    public function articles($id){
        echo "Ini merupakan halaman artikel dengan ID ". $id;
    }
}
