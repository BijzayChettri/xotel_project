<?php

namespace App\Http\Controllers;
use App\Models\Amenity;
use Illuminate\Http\Request;
use App\Http\Requests\AmenityRequest;
use Illuminate\Support\Facades\Auth;

class AmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $amenities = Amenity::where('status', '=', 0)->paginate(15);
        return view('admin.amenities',['list'=>$amenities]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AmenityRequest $request)
    {
        $amenity = Amenity::create($request->validated());

        return redirect('/amenities')->with('success', "Amenities successfully created.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AmenityRequest $request)
    {
        try{
            $update = Amenity::where('id', $request->id)->update(['name'=>$request->name,'slug'=>$request->slug,'status' => 0]);
            if($update){
                return redirect('/amenities')->with('success', "Amenities successfully updated.");
            }else{
                return redirect('/amenities')->with('warning', "Something Went Wrong!!");
            }
        }catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $delete = Amenity::where('id', $id)->update(['status' => 1]);
            if($delete){
                return redirect('/amenities')->with('success', "Amenities successfully deleted.");
            }else{
                return redirect('/amenities')->with('warning', "Something Went Wrong!!");
            }
        }catch (\Exception $e) {

            return $e->getMessage();
        }
    }
}
