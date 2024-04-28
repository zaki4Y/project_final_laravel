<?php

namespace App\Http\Controllers;

use App\Models\Workspace;
use Illuminate\Http\Request;

class WorkspaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $workspaces = Workspace::all();

        return view('admin', compact('workspaces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd('ff');
        request()->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:png,jpg,webp|max:2048",
            "ameneties" => "required",
            "price" => "required",
        ]);

        $image = $request->file("image");
        $imageName = time() . "_" . $image->getClientOriginalName();
        $image->storeAs("public/img", $imageName);

        Workspace::create([
            "name" => $request->name,
            "description" => $request->description,
            "image" => $request->image,
            "ameneties" => $request->ameneties,
            "price" => $request->price,
            

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workspace $workspace)
    {
        //
        request()->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:png,jpg,webp|max:2048",
            "ameneties" => "required",
            "price" => "required",
        
        ]);

        $uploadedFile = $request->file("image");

           $uploadedFile->move("storage/img", $workspace->image);

       

        $workspace->update([
            "name" => $request->name,
            "description" => $request->description,
            "ameneties" => $request->ameneties,
            "price" => $request->price,
        ]);

        return back();



        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }
}
