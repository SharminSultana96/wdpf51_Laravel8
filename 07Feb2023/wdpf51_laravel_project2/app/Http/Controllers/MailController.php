<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
// use Mail;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Exam is on 27 February',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('aklimaakterisdb@gmail.com')->send(new DemoMail($mailData));
        // Mail::to('jannatflowers3@gmail.com')->send(new DemoMail());
           
        dd("Email is sent successfully.");
    }

    public function contactForm()
    {
        return view('emails.contact');
    }

    public function MessageSend(Request $request)
    {
        // $datas = $request->all();
        // print_r($datas);
        // return view('contact');
        $mailData = [
        'senderEmail' => $request->sender_email,
        'senderName' => $request->sender_name,
        'message' => $request->message,
        ];

        // $data = array('name' => 'Sultana');
        // Mail::send(['text'=>'mail'], $data, function($message){
        //     $message->to('sharminsultana@gmail.com', 'Sharmin')->subject('mail');
        // });

        // Mail::to('aklimaakterisdb@gmail.com')->send(new DemoMail($mailData));
        Mail::to('jannatflowers3@gmail.com')->send(new DemoMail($mailData));
           
        dd("Message is sent successfully.");
    }
}