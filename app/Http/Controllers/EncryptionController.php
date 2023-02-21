<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptionController extends Controller
{
    public function encrypt()
    {
         $encrypted = Crypt::encryptString('Hello DevDojo');
         print_r($encrypted);
    }
    public function decrypt()
    {
         $decrypt= Crypt::decryptString('eyJpdiI6InJVU3lVRGVUeExobnlESkkxZnB1WXc9PSIsInZhbHVlIjoiUW5jYkRCOW5rSXZNdHJIUmdzVUFGdz09IiwibWFjIjoiY2U1MzY4OGJlMzEzMmE2MGYwNjMzNDMyZWIyMmQ2ZjhjZTMwNWU3NTc5MGU0Y2E5YTczNTZjN2UyMmY2M2ZiNCIsInRhZyI6IiJ9');
         print_r($decrypt);
    }
}
