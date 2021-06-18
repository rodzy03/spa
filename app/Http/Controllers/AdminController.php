<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use DB;

use Mail;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    
    public function get_landing_page()
    {
        $r_business_type = db::table('r_business_type')->where('active_flag',1)->get();
        $r_services = db::table('r_services')->where('active_flag',1)->get();
        
        
        return view('landing_page',compact('r_business_type','r_services'));
    }

    public function submit_client(Request $request)
    {
        $text_name = $request->get('text_name');
        $text_email = $request->get('text_email');
        $sel_business_type = $request->get('sel_business_type');
        $sel_services = $request->get('sel_services');
        $text_messages = $request->get('text_messages');

        $count = db::table('t_clients')->where('client_email', $text_email)->count();
        if($count > 0) {
            session(['error' => "Email already exists"]);
        }
        else {
            db::table('t_clients')
            ->insert([
                'client_name' => $text_name
                , 'client_email' => $text_email
                , 'business_type_id' => $sel_business_type
                , 'services_id' => $sel_services
                , 'message' => $text_messages
            ]);
        
            $data = [
            'subject' => 'Welcome',
            'to_email' => $text_email,
            'from' => 'iwasto2021@gmail.com','IWasto'
            ];
            
            $url = asset('');
            Mail::send('verify_email', 
            [ 'url' => $url."verify_email/".Crypt::encrypt($text_email) ] ,
            function($message) use ($data) {
                        
                $message->from($data['from'])
                ->to($data['to_email'],$data['to_email'])
                ->subject($data['subject']);
              });

              session(['message' => "Please check your email"]);
        }
        
        
        return Redirect::to(URL::previous() . "#contact");
    }
   
}
