<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galleries;
use Storage;
use File;
use Uuid; 

class GalleryController extends Controller
{
    public function index(Request $request){
        $this->setActive('galleries');
        $this->setTitle('galleries');
    	$this->data['galleries'] = Galleries::paginate(9); 


    	return view('admin.gallery.index', $this->data);
    }

    public function create(Request $request){
        $galeri = New Galleries;
        $galeri->id = Uuid::generate(4);

    	if ($request->hasFile('foto')) {
            $file = $request->foto;
            $filename = 'gallery/'. Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($file));
            $galeri->path= "storage/$filename";
            $galeri->filename=$filename;
            $galeri->save();

        }
        else return back()->with('status', 'Gagal');


        return back()->with('status', 'Sukses');
    }


    public function destroy(Galleries $gallery, Request $request){

        // dd($gallery->filename);
        Storage::disk('public')->delete($gallery->filename);

        $gallery->delete();

        return back()->with('status', 'Sukses menghapus gambar');
    }
}
