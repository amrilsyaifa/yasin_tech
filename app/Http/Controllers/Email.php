<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Email extends Controller
{
    public function sendEmail(Request $request)
        {    
            try{
                Mail::send('utils.email', ['nama' => $request->name, 'pesan' => $request->message], function ($message) use ($request)
                    {
                        $message->subject($request->subject);
                        $message->from('donotreply@yasin-tech.com', 'Amril');
                        $message->to($request->email);
                        $message->bcc('amrilsyaifa@gmail.com','Yasin Tech');
                    }); 
                return back()->with('alert-success','Berhasil Kirim Email');
                }         
            catch (Exception $e)
                {       
                    return response (['status' => false,'errors' => $e->getMessage()]);
                }
        }
}
