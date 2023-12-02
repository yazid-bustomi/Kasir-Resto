<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Hash;
use App\Services\Midtrans\CreateSnapTokenService; // => letakkan pada bagian atas class
 
class UserController extends Controller
{
    // public function index(Request $request){
    //     $produk = DB::select('select * from tbl_produks join tbl_produk_kategories on tbl_produks.kategori_produks = tbl_produk_kategories.id_produk_kategories');
    //     $count = DB::select('select sum(jumlah) as total from cart where id_user=?',[$request->session()->get('id')]);
    //     return view('user/home', ['title' => 'HOME','name' => $request->session()->get('name'),'role' => $request->session()->get('role'),'produk' => $produk,'count' => $count]);
    // }
    // public function add_cart(Request $request){
    //     DB::insert('INSERT INTO cart  (id_user,id_produk,jumlah) VALUES(?,?,?)',[$request->session()->get('id'),$request->id_produk,$request->jumlah]);
    //     return redirect(route('user'));
    // }
    // public function buy(Request $request){
    //     $users = DB::select('select * from users WHERE id = ?',[$request->session()->get('id')]);
    //     $aktivitas = DB::select('select * from aktivitas join venue on aktivitas.id_venue = venue.id_venue join teater on aktivitas.id_teater = teater.id_teater where aktivitas.id_aktivitas=?',[$request->id_aktivitas]);
    //     for($i=0;$i<count($aktivitas);$i++){
    //       $temp= DB::select('select * from section join aktivitas on aktivitas.id_aktivitas = section.id_aktivitas WHERE aktivitas.id_aktivitas=? ',[$aktivitas[$i]->id_aktivitas]);
    //       $aktivitas[$i]->show = $temp;
          
    //     } 
    //     $layout  = DB::select('select * from layout join venue on venue.id_venue = layout.id_venue join aktivitas on venue.id_venue= aktivitas.id_venue where aktivitas.id_aktivitas=?',[$request->id_aktivitas]);
    //     $bangkus = DB::select('select * from transaksi_header join transaksi_detail on transaksi_header.id_transaksi = transaksi_detail.id_transaksi where transaksi_header.id_aktivitas=?',[$request->id_aktivitas]);
    //     $section = DB::select('select * from section where section.id_aktivitas=?',[$request->id_aktivitas]);
    //     $bangku= array();
    //     foreach($bangkus as $b){
    //       $ada=0;
    //       for($i=0;$i<count($bangku);$i++){
            
    //           array_push($bangku,[$b->no_bangku,$b->jam_tayang,$b->tanggal_tayang]);
    //       }
          
    //     }
    //     $snapToken = "";
	// 	$transaksi = DB::select('select * from transaksi_detail join transaksi_header on transaksi_detail.id_transaksi = transaksi_header.id_transaksi');
    //     return view('user/home', ['title' => 'BUY','layout' => $layout,'name' => $request->session()->get('name'),'role' => $request->session()->get('role'),'aktivitas' => $aktivitas,'snapToken' => $snapToken,'data_bangku' => $bangku,'section' => $section,'transaksi' => $transaksi]);
    // }
    
}
