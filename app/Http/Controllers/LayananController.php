<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;
use Validator;
use Uuid;
use Storage;
use File;

class LayananController extends Controller
{
    public function index(Request $request)
    {
    	$this->setActive('layanan');
    	$this->setTitle('layanan');

    	$this->data['layanan'] = Layanan::get();

    	return view('admin.layanan.index', $this->data);
    }

    public function create(Request $request){
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'foto' => 'required|image|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $layanan = new Layanan;
        $layanan->id = Uuid::generate(4);
        $layanan->name = $request->name;
        

        if ($request->hasFile('foto')) {
            $file = $request->foto;
            $filename = 'layanan/'. Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($file));
            $layanan->path = "storage/$filename";

        }

        $layanan->save();
        // return redirect()->route('admin.galeri');
        return back()->with('status', 'sukses');
    }

    public function view(Layanan $layanan, Request $request)
    {
    	$this->setActive('layanan');
    	$this->setTitle('layanan');
    	
    	$this->data['layanan'] = $layanan;
    	return view('admin.layanan.view', $this->data);
    }

    public function update(Layanan $layanan, Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'foto' => 'image|max:2000',
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // $layanan = new Layanan;
        // $layanan->id = Uuid::generate(4);
        $layanan->name = $request->name;
        

        if ($request->hasFile('foto')) {
            $file = $request->foto;
            $filename = 'layanan/'. Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($file));
            $layanan->path = "storage/$filename";

        }

        $layanan->save();
        
        return back()->with('status', 'sukses');
    }
}
