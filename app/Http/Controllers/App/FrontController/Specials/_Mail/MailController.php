<?php
namespace App\Http\Controllers\App\FrontController\Specials\_Mail;
use App\Http\Controllers\MainController;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Mail;
use Session;

use Cart;

class MailController extends MainController
{

    public function sendEmail(Request $request)
    {
        /*$this->validate($request, [
            'order_name' => 'min:3',
            'order_lastname' => 'min:3',
            'order_company' => 'min:3',
            'order_company_code' => 'min:9',
            'order_email' => 'required|email',
            'order_phone' => 'min:10']);*/

        $data = array(
            'cartItems' =>  Cart::content(),

            'order_name' => $request->order_name,
            'order_lastname' => $request->order_lastname,
            'order_company' => $request->order_company,
            'order_company_code' => $request->order_company_code,
            'order_email' => $request->order_email,
            'order_phone' => $request->order_phone,
        );

        Mail::send('Web._Mail._Massage.Massage', $data, function($message) use ($data){
            $message->from($data['order_email']);
            $message->to('visuallado@gmail.com');
            $message->subject($data['order_name'].'-'.$data['order_lastname']);
        });

        /* if (Mail::failures()) {
            echo 'Mail not sent';
        }*/

        Session::flash('success', 'Your Email was Sent!');

        return redirect()->back();
    }
}