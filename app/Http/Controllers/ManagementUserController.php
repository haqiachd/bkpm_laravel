<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementUserController extends Controller{    
    public function index(){
        // return 'Halo ini adalah method index, dalam ManagementUserController';
        // return 'Method ini nantinya akan digunakan untuk mengambil semua data user';
        
        $nama = 'Eko Kurniawan';
        $pelajaran = ['Algoritma', 'Kalkulus', 'Prodas'];

        return view('home', compact('nama', 'pelajaran'));
    }
    public function create(){
        return 'Form Menambah data User';
    }
    public function store(Request $request){
        return 'Form Menciptkan data User';
    }
    public function show($id){
        return 'Data user dengan id = ' . $id;
    }
    public function edit($id){
        return 'Edit user dengan id = ' . $id;
    }
    public function update($id){
        return 'Update user dengan id = ' . $id;
    }
    public function destroy($id){
        return 'Destroy user dengan id = ' . $id;
    }
}