<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ruangtamu;
use App\pesan;


class FurnitureController extends Controller
{
    public function databarang()
    {
      $data = ruangtamu::orderBy('id','desc')->get();
      return view('admin.databarang', ['data'=>$data]);
    }
    public function inputbarang()
    {
      return view('admin.inputbarang');
    }
    public function about()
    {
      return view('about');
    }
    public function blog()
    {
      return view('blog');
    }
    public function kontak()
    {
      return view('kontak');
    }
    public function pesanfurniture()
    {
      return view('pesan.pesanfurniture');
    }
    public function homeadmin()
    {
      $ruangtamu = \App\ruangtamu::count();
      $pesan     = \App\pesan::count();
      $mesan     = \App\mesan::count();
      return view('admin.admin')->with('ruangtamu',$ruangtamu)->with('pesan',$pesan)->with('mesan',$mesan);

    }
    public function detailadmin($id)
    {
      $data = ruangtamu::find($id);
      $ruang = ruangtamu::where('id',$id)->first();   
      return view('admin.detailadmin', ['data'=>$data,'ruang'=>$ruang]);
    }
    public function listfurniture()
    {
      $data = ruangtamu::orderBy('id', 'desc')->get();
      return view('pesan.listfurniture', ['data'=>$data]);
    }
    public function editbarang($id)
    {
      $data = ruangtamu::find($id);
      return view('admin/editbarang', ['data'=>$data]);
    }
    public function editstatuspm($id)
    {
      $data = \App\mesan::find($id);
      return view('admin.editstatuspm', ['data'=>$data]);
    }
    public function editstatusps($id)
    {
      $data = pesan::find($id);
      return view('admin.editstatusps', ['data'=>$data]);
    }
    public function detailpesan($id)
    {
      $data = ruangtamu::find($id);
      $ruang = ruangtamu::where('id',$id)->first();
      return view('pesan.detail', ['data'=>$data,'ruang'=>$ruang]);
    }
    public function datapesanan()
    {
      $data = pesan::orderBy('id','desc')->get();
      return view('admin.datapesanan', ['data'=>$data]);
    }
    public function detailpesanan($id)
    {
      $data = pesan::find($id);
      return view('admin.detailpesanan', ['data'=>$data]);
    }
    public function mesan($id)
    {
      $data = pesan::find($id);
      $ruang = ruangtamu::where('id',$id)->first();
      return view('pesan.mesan', ['data'=>$data,'ruang'=>$ruang]);
    }
    public function datapemesan()
    {
      $data = \App\mesan::orderBy('id','desc')->get();
      return view('admin.datapemesan', ['data'=>$data]);
    }
    public function detailpemesan($id)
    {
      $data = \App\mesan::find($id);
      return view('admin.detailpemesan', ['data'=>$data]);
    }
    public function laporanpemesan($id)
    {
      $data = \App\mesan::find($id);
      return view('admin.laporanpemesan', ['key'=>$data]);
    }
    public function laporan($id)
    {
      $data = \App\mesan::find($id);
      return view('admin.laporan', ['data'=>$data]);
    }
    public function laporancontoh($id)
    {
      $data = \App\pesan::find($id);
      return view('admin.laporancontoh', ['data'=>$data]);

    }

}
