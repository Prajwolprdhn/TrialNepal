<?php

namespace App\Http\Controllers;

use App\Models\All_Assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class All_AssetController extends Controller
{
    public function asset($category){
        $clickValue = DB::select('select * from all_assets where category = ?',[$category]);
        
        return view('admin.layouts.asset_list',['clickValue' => $clickValue]);
    }
    public function addasset(){
        $options = DB::table('assets')->pluck('name');
        return view('admin.layouts.addasset',['options' => $options]);
    }
    public function asset_store(Request $request){
        $user_id = Auth::id();
        $asset = new All_Assets;
        $asset -> name = $request->input('name');
        $asset -> contact = $request->input('contact');
        $asset -> location = $request->input('location');
        $asset -> category  = $request->input('options');
        if($request->hasFile('asset_img')){
            $file = $request->file('asset_img');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/assets/specific_assets',$filename);
            $asset->asset_img = $filename;
        }
        $asset -> user_id = $user_id;
        $asset->save();
        return redirect('admin/asset');
    }

    public function assetedit($asset_id){
        $asset = DB::select('select * from all_assets where id = ?',[$asset_id]);
        return view('admin.layouts.asset_edit',['asset' => $asset]);
    }
    public function assetupdate(Request $request, $asset_id){

        $asset = All_Asset::find($asset_id);
    //    dd($user);
        $asset->name = $request->name;
        $asset->location = $request->location;
        $asset->contact = $request->contact;
        $asset->update();

        return redirect('admin/asset');
    }

}
