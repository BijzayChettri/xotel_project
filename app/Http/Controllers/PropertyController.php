<?php

namespace App\Http\Controllers;
use App\Http\Requests\PropertyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Amenity;
use App\Models\Property;
use App\Models\PropertyAmenity;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Storage;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('status', '=', 0)->paginate(15);
        $amenity = Amenity::where('status', '=', 0)->get();
        return view('admin.properties',['propertyList'=>$properties,"amenities"=>$amenity]);
        // return view('admin.properties');
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
    public function store(PropertyRequest $request)
    {
        $validateImageData = $request->validate([
                'file' => 'required',
                'file.*' => 'mimes:jpg,png,jpeg,gif,svg'
            ]);
        $property =  Property::create($request->post());
        $path = public_path("images/property/".$property->id);
        if($property){
            if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true, true);
                // $files = [];
                if($request->hasfile('file')){
                    foreach($request->file('file') as $file){
                        $name = time().rand(1,100).'.'.$file->extension();
                        $file->move($path, $name);  
                        // $file->storeAs($path, $name);
                        PropertyImage::create(['property_id'=>$property->id,'url' => $name]);  
                    }
                }
                if($request->amenities){
                    foreach($request->amenities as $val){ 
                        PropertyAmenity::create(['property_id'=>$property->id,'amenities' => $val]);
                    }
                }

            }   
            return back()->with('success','Property has been successfully created.');
        }else{

            File::deleteDirectory(public_path($path));
            return back()->with('warning','Failed.Contact Admin!!');

        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $amenity = Amenity::where('status', '=', 0)->get();
        $properties = Property::with('amenities')->with('images')->where('status', '=', 0)->where('id','=',$id)->get();
        return view('admin.propertiesEdit',['propertyList'=>$properties,"amenitiesData"=>$amenity]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request)
    {

        $validateImageData = $request->validate([
            'file.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);
        $path = public_path("images/property/".$request->id);
        $postData = ['name' => $request->name, 'type' => $request->type, 'price' => $request->price, 'owner_name'=> $request->owner_name,'phone' => $request->phone,'email' => $request->email,'address' => $request->address,'pin' => $request->pin,'latlng' => $request->latlng,'description' => $request->description];
        $property =  Property::where('status', 0)
        ->where('id', $request->id)->update($postData);
        if($property){
            if($request->hasfile('file')){
                  if(File::isDirectory($path)){

                       foreach($request->fileNames as $fileName){

                            file::delete($path.'/'.$fileName);
                        }
                        PropertyImage::where('property_id', $request->id)->delete();  
                        foreach($request->file('file') as $file){
                            $name = time().rand(1,100).'.'.$file->extension();
                            $file->move($path, $name);  
                            // $file->storeAs("public/images/property/".$request->id."/", $name);
                            PropertyImage::create(['property_id'=>$request->id,'url' => $name]);  

                        }
                    }else{
                      return back()->with('warning','File upload failed.');
                    }
                }
                if($request->amenities){
                    PropertyAmenity::where('property_id', $request->id)->delete();  
                    foreach($request->amenities as $val){ 
                       PropertyAmenity::create(['property_id'=>$request->id,'amenities' => $val]);
                    }
                }
                return back()->with('success','Property has been successfully created.');

            }else{
                return back()->with('warning','Failed.Contact Admin!!');
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
        $property =  Property::where('id', $id)->update(['status'=>'1']);
        return back()->with('success','Property deleted successfully!');
    }
}
