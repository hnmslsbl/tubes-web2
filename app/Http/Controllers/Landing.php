<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        return view('user.utama');
    }

    public function PemanggilanProduk(){
        $product = Admin::whereHas('categories',function($query){
            $query->where('name','Penggunaan Harian');
        })->paginate(6);
        $product2 = Admin::whereHas('categories',function($query){
            $query->where('name','Pekerja Kantoran');
        })->paginate(6);
        $product3 = Admin::whereHas('categories',function($query){
            $query->where('name','Desain Grafis');
        })->paginate(6);
        $product4 = Admin::whereHas('categories',function($query){
            $query->where('name','Gaming');
        })->paginate(6);
        $product5 = Admin::whereHas('categories',function($query){
            $query->where('name','Programming');
        })->paginate(6);
        $product6 = Admin::whereHas('categories',function($query){
            $query->where('name','Profesional');
        })->paginate(6);

       return view('user.landing',compact('product','product2','product3','product4','product5','product6')); 
    }
    
}
