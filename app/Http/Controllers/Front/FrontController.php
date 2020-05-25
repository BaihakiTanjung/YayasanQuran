<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Message;
use DB;

class FrontController extends Controller
{
    public function index()
    {
        // $data = Slider::all();

        $about = DB::table('about')
            ->limit(1)
            ->get();

        $qoutes = DB::table('qoutes')->get();

        $visimisi = DB::table('visimisi')->get();

        return view('pages.main')->with([
            'about' => $about,
            'qoutes' => $qoutes,
            'visimisi' => $visimisi
        ]);
    }

    public function kirimPesan(Request $request)
    {

        DB::table('message')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        // return $request->all();

        
    }
}
