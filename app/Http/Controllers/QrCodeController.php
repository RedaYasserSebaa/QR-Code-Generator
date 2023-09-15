<?php

// app/Http/Controllers/QrCodeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrCodeController extends Controller
{
     public function generate(Request $request)
    {
        $data = $request->input('data'); // Default text

        return QrCode::size(500)
        ->margin(15) // Set the margin size (adjust as needed)
        ->generate($data);;
    } 
}

