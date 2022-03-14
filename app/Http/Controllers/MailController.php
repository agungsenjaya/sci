<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Kategori;
use App\Akategori;
use App\Brand;
use App\Contact;
use App\Artikel;
use Mail;
use Carbon;
use Session;

class MailController extends Controller
{
    public function contact_send(Request $request)
    {
    	$data = array(
    		'name' => $request->name, 
    		'email' => $request->email, 
    		'message' => $request->message,
    	);
        $send = Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);
        if ($send) {
            Mail::send('email.contact', ['data' => $data], function($mail) use($data) {
                $mail->from($data['email'], $data['name']);
                $mail->to('info@sci-paint.com', 'EMAIL PELANGGAN');
                // $mail->to('senjayaml@gmail.com', 'San Central Indah');
                $mail->subject('Contact Pesan '. ucwords($data['name']));
            });
        }
        Session::flash('success', 'Berhasil mengirim pesan..');
    	return redirect()->back();
    }
}
