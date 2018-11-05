<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paket;
use App\Layanan;
use Uuid;
use Validator;
class PaketController extends Controller
{

	public function create(Layanan $layanan, Request $request){
		$validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'foto' => 'required|image|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $paket = New Paket;
        $paket->id = Uuid::generate(4);
        $paket->name = $request->name;
        $paket->layanan_id = $layanan->id;
        $paket->save();

        return back()->with('status', 'Sukses');
	}
    public function view(Paket $paket, Request $request)
    {
    	$this->setActive('layanan');
    	$this->setTitle('layanan');
    	// $paket = 
    	$this->data['paket'] = $paket;
    	return view('admin.paket.view', $this->data);
    }

    public function update(Paket $paket, Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $paket->name = $request->name;
        $paket->desc = htmlentities($request->deskripsi);
        $paket->save();

    	return back()->with('status', 'Sukses');
    }
}
