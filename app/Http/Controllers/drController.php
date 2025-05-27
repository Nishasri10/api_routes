<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\dr;
class drController extends Controller
{
    public function index() {
        $drlist=dr::all();
        return response()->json([
            'status'=>1,
            'message'=>'Nisha',
            'drlist'=>$drlist
        ]);
    }
    public function store(Request $request){
        $dr=new dr;
        $dr->Name=$request->Name;
        $dr->Rollno=$request->Rollno;
        $dr->Department=$request->Department;
        $drData=$dr->save();
        return response()->json([
            'status'=>1,
            'message'=>'Data stored succesfully',
            'data'=>$drData
        ]);
    }
    public function update(Request $request,$id)
    {
        $dr=dr::find($id);
        $dr->Name=$request->Name;
        $dr->Rollno=$request->Rollno;
        $dr->Department=$request->Department;
        $updatedr=$dr->save();
        return response()->json([
            'status'=>1,
            'message'=>'updated successfully',
            'data'=>$updatedr
        ]);
    }
    public function delete(Request$request,$id)
    {
        $dr=dr::find($id);
        $dr->delete();
        return response()->json([
            'status'=>1,
            'message'=>'Deleted successfully'
        ]);
    }
    public function fetch(Request $request,$Department)
    {
        $drr=dr::where('Department',$Department)->first();
        return response()->json([
            'status'=>1,
            'message'=>'Fetched successfully',
            'data'=>$drr
        ]);
    }
}
