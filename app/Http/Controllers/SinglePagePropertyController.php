<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Amenity;
use App\Models\Property;
use App\Models\PropertyBooking;
use App\Models\BookingLeadStatus;
use Mail;
use App\Mail\SendMail;
class SinglePagePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $amenity = Amenity::where('status', '=', 0)->get();
        $properties = Property::with('amenities')->with('images')->where('status', '=', 0)->where('id','=',$id)->get();
        return view('user.singleProperty',['propertyList'=>$properties,"amenitiesData"=>$amenity]);
        
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
    public function store(Request $request)
    {
        $request->validate([
            'custEmail' => 'required',
            'custPhone' => 'required'
        ]);
       $save = PropertyBooking::create($request->post()); 
    //    dd($save->id);
       BookingLeadStatus::create(['booking_id'=>$save->id,'status' =>'new','remark'=>'-']);
       

       if($save){
        $mailData = [
            'title' => 'Booking lead form  '.$request->custName,
            'head' => 'Hello Xotel,',
             'body'=>'You have received a booking lead from  '. $request->custName. '  his/her email is-  ' . $request->custEmail. '  and contact number is -  '
            . $request->custPhone.'  for property  '. $request->propertyName.'  of  '.$request->propertyAddress,
            'footer'=>'Please process this lead ASAP.Thank you.',
        ];

        Mail::to('xoteltravel@gmail.com')->send(new SendMail($mailData));
        return back()->with('success','Enjoy the beauty of world.Xotel will contact you in few minutes');

       }else{
        return back()->with('error','Please try after some time.');

       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $bookings = PropertyBooking::where('status', '=', 0)->paginate(15);
        return view('admin.bookingList',['bookings'=>$bookings]);
    }

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
    public function update(Request $request)
    {
       $postData = ['status' => $request->status, 'remark' => $request->remark];
        $bookingUpdate =  BookingLeadStatus::where('booking_id', $request->bookingId)->update($postData);
        if($bookingUpdate){
            $postData = ['Bookingstatus' => $request->status];
            $bookingUpdate =  PropertyBooking::where('id', $request->bookingId)->update($postData);
         return back()->with('success','Booking status lead updated successfully!!');
        }else{
         return back()->with('error','Please try after some time.');
        }

        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
