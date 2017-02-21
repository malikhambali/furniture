<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
// use App\ruangtamus;
use App\ruangtamu;
use App\pesan;
use DB;
use App\mesan;

class ProsesController extends Controller
{
  public function ruangtamu()
  {
    $input = new ruangtamu;
    $input->namabarang = Input::get('nama_barang');
    $input->jenisbarang = Input::get('jenisbarang');
    // $input->golongan = Input::get('golongan');
    $input->harga = Input::get('harga');
    $input->ketersediaan = Input::get('ketersediaan');
    $foto = Input::file('image');
    $ext = $foto->getClientOriginalExtension();
    $image_name = round(microtime(true)).'.'.$ext;
    $foto->move('admin/image',$image_name);

    $input->image = $image_name;
    $input->status = 'ada';
    $input->save();
    return redirect('admin/databarang');
    }
    public function deleter($id)
    {
      DB::table('ruangtamus')->delete($id);
      return redirect('admin/databarang');
    }
    public function deletep($id)
    {
      DB::table('pesans')->delete($id);
      return redirect('admin/datapesanan');
    }
    public function deletepemesan($id)
    {
      DB::table('mesans')->delete($id);
      return redirect('admin/datapemesan');
    }
    public function edit($id)
    {
      $editb = ruangtamu::find($id);
      $editb->namabarang = Input::get('namabarang');
      $editb->jenisbarang = Input::get('jenisbarang');
      $editb->harga = Input::get('harga');
      $editb->ketersediaan = Input::get('ketersediaan');
      $editb->status = Input::get('status');
      $editb->save();
      return redirect('admin/databarang');
    }
    public function pesanbarang()
    {
      $input = new pesan;
      $input->namalengkap = Input::get('namalengkap');
      $input->alamat = Input::get('alamat');
      $input->email = Input::get('email');
      $input->nama_barang = Input::get('nama_barang');
      $input->jenis_barang = Input::get('jenis_barang');
      $input->jumlah = Input::get('jumlah');
      $foto = Input::file('image');
      $ext = $foto->getClientOriginalExtension();
      $image_name = round(microtime(true)).'.'.$ext;
      $foto->move('admin/image',$image_name);

      $input->image = $image_name;
      $input->no_telpon = Input::get('no_telpon');
      $input->keterangan = Input::get('keterangan');
      $input->save();
      return redirect('pesanfurniture');
    
      
    }
    public function mesan()
    {
      $input = new mesan;
      $input->namalengkap = Input::get('namalengkap');
      $input->id_barang = Input::get('id_barang');
      $input->image_barang = Input::get('image_barang');
      $input->alamat = Input::get('alamat');
      $input->no_telp = Input::get('no_telp');
      $input->email = Input::get('email');
      $input->jumlah = Input::get('jumlah');
      $input->save();
      return redirect('listfurniture');
    }
}
