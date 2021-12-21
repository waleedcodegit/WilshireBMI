<?php

namespace App\Http\Controllers;

use App\Admin;
use App\AdminAuthMeta;
use App\Appointment;
use App\Client;
use App\Date;
use App\Slot;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login_admin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'password' => 'required',     
        ]);
        if($validator->fails()){
            $response = ['status' => 219 , 'msg' => $validator->errors()->first() , 'errors' => $validator->errors()];
            return $response;
        }else{
            $admin = Admin::where('email', $request->email)->first();
            if($admin){
                if(Hash::check($request->password, $admin->password)){
                    $meta_check = AdminAuthMeta::where('admin_id',$admin->id)
                                    ->where('ip',$request->ip())
                                    ->first();
                    if($meta_check){
                        $token = $meta_check->token;
                    }else{
                        $meta = new AdminAuthMeta();
                        $meta->admin_id = $admin->id;
                        $meta->ip = $request->ip();
                        $meta->token = Hash::make(time());
                        $new_time = date('H:i', strtotime('+15 minutes'));
                        $meta->token_valid_till = $new_time;
                        $meta->save();
                        $token = $meta->token;
                    }
                    $admin->token = $token;
                    $response = [   
                        'status' => 200 , 
                        'msg' => 'success- admin Authenticated Successfully',
                        'admin' => $admin
                    ];
                    return $response;
                }else{
                    $response = ['status' => 401 , 'msg' => 'Error- Invalid Password'];
                return $response;
                }
            }else{
                $response = ['status' => 401 , 'msg' => 'Error- Invalid Email'];
                return $response;
            }
        }
    }
    public function admin_check_auth(Request $request){
                $admin_auth = AdminAuthMeta::where('token',$request->token)
                ->where('ip',$request->ip())
                ->first();
                
        if($admin_auth){
            
            $response = ['status' => 200];
            return $response; 
        }else{
        $response = ['status' => 401 , 'msg' => 'Sorry, Incorrect Token'];
        return $response;
        }
    }

    public function add_client(Request $request){

        $validator = Validator::make($request->all(), [
            'business_name' => 'required ',
            'business_address' => 'required',

            'password' => 'required | min:6',
            'confirm_password' => 'required | min:6 | same:password',
             'username' => 'required | unique:clients',
             'telephone' => 'required',

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);

        }

        $client = new Client();
        $client->business_name = $request->business_name;
        $client->business_address = $request->business_address;
        $client->username = $request->username;
        $client->password = $request->password;
        $client->phone = $request->telephone;

        $client->save();

        return response()->json([
            'status' => true,
            'message' => 'Client Added Successfully',
        ]);
    }

    public function update_client(Request $request){

        $validator = Validator::make($request->all(), [
            'business_name' => 'required ',
            'business_address' => 'required',

            'password' => 'required | min:6',
            'confirm_password' => 'required | min:6 | same:password',
            //  'username' => 'required | unique:clients',
             'telephone' => 'required',

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);

        }

        $client = Client::find($request->id);
        $client->business_name = $request->business_name;
        $client->business_address = $request->business_address;
        $client->username = $request->username;
        $client->password = $request->password;
        $client->phone = $request->telephone;
        $client->status = $request->status;
        $client->save();

        return response()->json([
            'status' => true,
            'message' => 'Client Updated Successfully',
        ]);
    }

    public function get_clients(){
        $clients = Client::where('delete_status' , 0)->get();
        return $clients;
    }
    public function get_client_by_id(Request $request){
        $clients = Client::find($request->id);
        return $clients;
    }

    public function delete_client(Request $request){
        $client = Client::find($request->id);
        $client->delete();
    }
    public function get_dates(){
        $dates = Date::all();
        $response = ['status' => 200 , 'message' => 'success', 'dates' => $dates];
        return $response;
    }
    public function create_slots(Request $request){
        $st = strtotime($request->start_time);
        $et = strtotime($request->end_time);

        $slot = new Slot();
        $slot->client_id = $request->client_id;
        $slot->date = $request->date;
        $slot->name =  date('h:i',$st) . " - " . date('h:i',$et);

        $slot->start_time = date('h:i',$st);
        $slot->end_time = date('h:i',$et);
        $slot->save();
    }   
    public function get_slots_by_date(Request $request){
        $slots = Slot::where('date',$request->date)->where('client_id',$request->client_id)->get();
        return $slots;
    }
    public function delete_appointment(Request $request){
        $client = Appointment::find($request->id);
        $client->delete();
    }
    public function delete_slot(Request $request){
        $client = Slot::find($request->id);
        $client->delete();
    }
    public function make_appointment(Request $request){
        $validator  = Validator::make($request->all(), [
            'client_id' => 'required ',
            'name' => 'required',

            'email' => 'required |unique:appointments',
            'phone' => 'required |unique:appointments| min:11 | max:11',
             'height' => 'required',
             'weight' => 'required',
             'age' => 'required',
             'area' => 'required',
             'date' => 'required',
             'bmi' => 'required',
             'slot_id' => 'required'

        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 401,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ]);

        }
        $appointment  = new Appointment();
        $appointment->client_id = $request->client_id;
        $appointment->name  = $request->name;
        $appointment->date  = $request->date;
        $appointment->email  = $request->email;
        $appointment->phone  = $request->phone;
        $appointment->height  = $request->height;
        $appointment->weight  = $request->weight;
        $appointment->age  = $request->age;
        $appointment->slot_id  = $request->slot_id;
        $appointment->area  = $request->area;
        $appointment->bmi  = $request->bmi;
        $appointment->save();

        if($request->slot_id != 0){
            $slot = Slot::where('id',$request->slot_id)->first();
            if($slot){
                $slot->status = 1;
                $slot->save();
            }
        }

        $response = ['status' => 200 , 'message' => 'Appointment created successfully.' , 'appointment' => $appointment];
        return $response;
    }
    public function client_login(Request $request){
        $user = Client::where('username',$request->username)->where('status',1)->first();
        if($user){
            if($user->password == $request->password){
                $response = ['status' => 200 , 'msg' => 'Authentication Successfull.','user'=>$user];
                return $response;
            }else{
                $response = ['status' => 401 , 'msg' => 'Password authentication failed.'];
                return $response;
            }
        }else{
            $response = ['status' => 401 , 'msg' => 'User not found.'];
            return $response;
        }
    }
   public function get_available_slots(Request $request){
    $validator  = Validator::make($request->all(), [
        'client_id' => 'required ',
        'date' => 'required',


    ]);
    if($validator->fails()){
        return response()->json([
            'status' => 401,
            'message' => $validator->errors()->first(),
            'errors' => $validator->errors()
        ]);

    }
    $slots = Slot::where('date',$request->date)->where('client_id',$request->client_id)->where('status',0)->get();

    if(sizeof($slots) > 0){
        $response = ['status' => 200 , 'message' => 'success' , 'slots' => $slots];
        return $response;
    }else{
        $response = ['status' => 404 , 'message' => 'No available slots.' , 'slots' => $slots];
        return $response;
    } 
   }

   public function get_appointments_by_date(Request $request){
       $appointment = Appointment::where('client_id',$request->client_id)->where('date',$request->date)->with('slot')->get();
       return $appointment;
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
        //
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
    public function add_event(Request $request){
        
        $validator = Validator::make($request->all(), [
            'eventname' => 'required',
            'image' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);
        if($validator->fails()){
            $response = ['status' => 219 , 'msg' => $validator->errors()->first() , 
            'errors' => $validator->errors()];
            return $response;
        }else{
            $event = new Event();
            $event->event_name = $request->eventname;
            $event->image = $request->image;
            $event->description = $request->description;
            $event->startdate = $request->startdate;
            $event->enddate = $request->enddate;
            $event->save();
            $response = ['status' => 200 , 'msg' => 'event added.'];
            return $response;
        }
    }
    public function get_events(){
        $event = Event::all();
        $response = ['message' => 'success', 'event' => $event];
        return $response;
    }
    public function get_event_by_id(Request $request){
        $event = Event::find($request->id);
        return $event;
    }
    public function update_event(Request $request){

        $event = Event::find($request->id);
        $event->event_name = $request->eventname;
        $event->image = $request->image;
        $event->description = $request->description;
        $event->startdate = $request->startdate;
        $event->enddate = $request->enddate;
        $event->save();

        return response()->json([
            'status' => 200,
            'message' => 'Client Updated Successfully',
        ]);
    }
    public function delete_event(Request $request){
        $event = Event::find($request->id);
        $event->delete();
    }
    public function get_coming_events(){
        $today = Carbon::today();
        $event = Event::whereDate('startdate' ,'>', $today)
        ->get();
        return view ('Front.Home')->with('event',$event);
    }

        //dd($event);
        
        // $response = ['message' => 'success', 'event' => $event];
        //return view('Home',['event'=> $event]);
        //$event = Event::whereDate('startdate' ,'>', $today)->get();
        // $response = ['message' => 'success', 'event' => $event];
        // return view ('Home' , ['events' => $event]);
        //return view::make('Home' ,compact('event'));  
        // view()->share('event',$event); 
        // return view('Home'); 
    
}
