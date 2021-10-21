<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //

    public function index(){
        return view('files');
    }

    public function store(Request $request){
        
        $request->validate(
            [
                'file' => 'mimes:pdf'
            ]
            );

        $FileNameWithExt = $request->file('file')->getClientOriginalName();
        $fileName = pathinfo($FileNameWithExt,PATHINFO_FILENAME);
        $ext = $request->file('file')->getClientOriginalExtension();
        $fielNameToStore = $fileName.'_'.time().'.' .$ext;
        $filePath = $request->file('file')->storeAs('/storage/user',$fielNameToStore);
        

        $file = new File();
        $file->url = $filePath;
        $file->save();

    
       
    }
}
