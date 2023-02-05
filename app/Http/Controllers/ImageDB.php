<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect,Response,File;
 
use Illuminate\Support\Facades\Storage;
 
class ImageDB extends Controller
{
  
    function saveImage(Request $request)
    {
      $fielnames = $request->input('name');
      $desc = $request->input('desc');
      $filepath = $request->file('file')->store('imgAssets');
       
      DB::table('image_db')->insert([
            'name' =>  $fielnames ,
            'description'=> $desc,
            'img_path' => $filepath,
          ]); 
    }
    function dataList()
    {
      $res =  DB::table('image_db')->get();  
      return Response::json($res);
    }
    function deleteImg($id)
    {
      $res = DB::table('image_db')->where('id', $id)->delete();
      return Response::json($res);
    }
}