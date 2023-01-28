<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;
use App\Models\SelfRegistration;
class SelfRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'phone'=>'required'
        ]);
       $save = SelfRegistration::create($request->post()); 
       if($save){
        $mailData = [
            'title' => 'Property lead form '.$request->name,
            'head' => 'Hello Xotel,',
             'body'=>'Someone wants to join you. Name : '. $request->name. '  his/her email : ' . $request->email. '  and contact number is : '
            . $request->phone,
            'footer'=>'Please follow up this request ASAP.Thank you.',
        ];

        Mail::to('xoteltravel@gmail.com')->send(new SendMail($mailData));
        return back()->with('success','Thank you for showing interest on us.Xotel will contact you in few minutes');

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
        $selfRegistration = SelfRegistration::where('status', '=', 0)->paginate(15);
        return view('admin.selfRegisterLead',['selfRegistration'=>$selfRegistration]);
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
    public function update(Request $request, $id)
    {
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
