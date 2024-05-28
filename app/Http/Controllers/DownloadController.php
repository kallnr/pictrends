<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    //
    public function index(Foto $url)
    {
    	$filePath = storage_path('app/public/gallery' . $url);

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return abort(404, 'File not found');
        }


    }
}
