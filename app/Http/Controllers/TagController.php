<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function index()
    {
        return Tag::latest()->paginate(10);
    }

    public function store(Request $requst)
    {
        $validated = $this->validate($requst,[
            'name' => 'required|string'
        ]);

        Tag::create($validated);

        return response()->json("Data Inserted");
    }

    public function update(Request $request , $id){
        $validated = $this->validate($request,[
            'name' => 'required|string'
        ]);
        $tag = Tag::find($id);

        $tag->name = $request->name;
        $tag->save();
        return response([200,'Data Updated']);
    }

    public function destory($id)
    {
        Tag::find($id)->delete();

        return response()->json("Tag has been deleted");
    }
}
