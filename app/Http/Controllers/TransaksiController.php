<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\TransaksiItem;


class TransaksiController extends Controller
{

    public function index()
    {
        $data = array(
            'title'      => 'Data Transaksi',
            'transaksi' => Transaksi::all(),
    );

    return view('kasir.list' , $data);

    }

    public function create()
    {
        $barang = Barang::all();
        $data = array(
            'title'      => 'Buat Transaksi',

        );
        return view('kasir/add',['barang' => $barang] , $data);
    }

    public function store(Request $request)
    {
        $transaksi = new Transaksi();
        $transaksi->fill([
            'user_id' => Auth::id(),
            'total_harga' => $request->get('total_harga')
        ]);
        $transaksi->save();
        $no_barang = 0;
        foreach ($request->get('id_barang') as $id_barang) {
            $barang = Barang::findOrFail($id_barang);
            $transaksi_item = new TransaksiItem();
            $transaksi_item->fill([
                'id_transaksi' => $transaksi->id,
                'id_barang' => $id_barang,
                'nama' => $barang->nama_barang,
                'harga' => $barang->harga,
                'quantity' => $request->get('quantity')[$no_barang]
            ]);
            $transaksi_item->save();
            $no_barang++;
        }
        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->back();
    }
}
