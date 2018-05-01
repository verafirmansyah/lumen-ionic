<?php 

namespace App\Http\Controllers;

use App\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class NewsController extends Controller  {
 
    public function index()
    {
        $News = News::all();
        return response()->json($News);
    }
 
    public function store(Request $request)
    {
        $create = News::create($request->all());
        if ($create) {
            $res['success'] = true;
            $res['message'] = 'Success create!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to create!';

            return response($res);
        }
    }
 
    public function show($id)
    {
        // $News = News::where('ND_ID',$id)->get();
        $News = News::find($id);
        return response()->json($News);
    }
 
    public function update(Request $request, $id)
    {
        $News = News::find($id);
        $update = $News->update($request->all());
        // $News->nd_title  = $request->input('nd_title');
        // $News->nd_description = $request->input('nd_description');
        // $News->nd_image_path   = $request->input('nd_image_path');
        // $News->nd_content   = $request->input('nd_content');
        // if ($News->save()) {

        if ($update) {
            $res['success'] = true;
            $res['message'] = 'Success update!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to update!';

            return response($res);
        }
    }
 
    // public function delete($id)
    // {
    //     $delete = News::destroy($id);
 
    //     if ($delete) {
    //         $res['success'] = true;
    //         $res['message'] = 'Success delete!';

    //         return response($res);
    //     }else{
    //         $res['success'] = false;
    //         $res['message'] = 'Failed to delete!';

    //         return response($res);
    //     }
    // }
 
    public function delete($id){
        header("Access-Control-Allow-Origin: *");
        $News  = News::find($id);
        
         if ($News->delete()) {
            $res['success'] = true;
            $res['message'] = 'Success delete!';

            return response($res);
        }else{
            $res['success'] = false;
            $res['message'] = 'Failed to delete!';

            return response($res);
        }
    } 
}