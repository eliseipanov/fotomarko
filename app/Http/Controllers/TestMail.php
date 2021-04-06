<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class TestMail extends Controller
{
    public function sendmail() {
    $data = ['message' => 'This is a test!'];
    Mail::to('albomcreator@gmail.com')->send(new TestEmail($data));
    } 
}
