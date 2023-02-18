<?php

namespace App\Http\Controllers;

use App\Models\Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AssetsController extends Controller
{
    public function asset(){
        $assets = DB::select('select * from assets');
        return view('admin.layouts.asset',['assets'=>$assets]);
    }
    public function asset_form(){
        return view('admin.layouts.asset_form');
    }
    public function asset_store(Request $request){

        $asset = new Assets;
        $asset -> name = $request->input('name');
        if($request->hasFile('asset_img')){
            $file = $request->file('asset_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/assets/',$filename);
            $asset->asset_img = $filename;
        }
        $asset->save();
        return redirect('admin/asset');
    }
}
