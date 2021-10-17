<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    private $userId = '';
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->userId = \Auth::user()->id;
            return $next($request);
        });
    }

    public function getImage($file)
    {
        $filePath = $this->userId.'/images/'.$file;
        if (!\Storage::disk('private')->exists($filePath)){ // note that disk()->exists() expect a relative path, from your disk root path. so in our example we pass directly the path (/.../laravelProject/storage/app) is the default one (referenced with the helper storage_path('app')
            abort('404'); // we redirect to 404 page if it doesn't exist
        }

        $path = \Storage::disk('private')->path($filePath);
        $type = "image/jpeg";
        header('Content-Type:'.$type);
        header('Content-Length: ' . filesize($path));
        readfile($path);
    }
}
