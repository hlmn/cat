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
    	$this->data['galleries'] = Galleries::get(); 


    	return view('admin.gallery.index', $this->data);
    }

    public function create(Request $request){

    	if ($request->hasFile('foto')) {
            $file = $request->foto;
            $filename = 'kegiatan/'. Uuid::generate(4) . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, File::get($file));
            // $galeri->link_foto = "storage/$filename";

        }
        // $galeri->save();
    }
}
