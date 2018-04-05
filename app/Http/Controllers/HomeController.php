<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sign;
use App\Mail\NewRegister;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'address' => 'required|max:500',
            'id_card' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'driving_license' => 'required|string|max:255',
            'oc' => 'required|string|max:255',
            'marka' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'nr_rej' => 'required|string|max:255',
            'ccm' => 'required|string|max:255',
            'rok' => 'required|string|max:255',
            'klasa' => 'required|string|max:255',
            'terms' => 'accepted',
        ]);

        $sign = new Sign();
        $sign->name = $request->name;
        $sign->lastname = $request->lastname;
        $sign->address = $request->address;
        $sign->id_card = $request->id_card;
        $sign->phone = $request->phone;
        $sign->email = $request->email;
        $sign->driving_license = $request->driving_license;
        $sign->oc = $request->oc;
        if(isset($request->nw)) $sign->nw = $request->nw;
        if(isset($request->pilot_name)) $sign->pilot_name = $request->pilot_name;
        if(isset($request->pilot_lastname)) $sign->pilot_lastname = $request->pilot_lastname;
        if(isset($request->pilot_address)) $sign->pilot_address = $request->pilot_address;
        if(isset($request->pilot_id_card)) $sign->pilot_id_card = $request->pilot_id_card;
        if(isset($request->pilot_phone)) $sign->pilot_phone = $request->pilot_phone;
        if(isset($request->pilot_email)) $sign->pilot_email = $request->pilot_email;
        if(isset($request->pilot_driving_license)) $sign->pilot_driving_license = $request->pilot_driving_license;
        if(isset($request->pilot_oc)) $sign->pilot_oc = $request->pilot_oc;
        if(isset($request->pilot_nw)) $sign->pilot_nw = $request->pilot_nw;
        $sign->marka = $request->marka;
        $sign->model = $request->model;
        $sign->turbo = $request->turbo?'tak':'nie';
        $sign->nr_rej = $request->nr_rej;
        $sign->ccm = $request->ccm;
        $sign->rok = $request->rok;
        $sign->klasa = $request->klasa;

        $path = '';
        if(isset($request->payment)){
            $path = $request->file('payment')->store('payments');
            $sign->payment = $path;
        } 
        $sign->save();
        $data = $sign;

        $pdf = PDF::loadView('pdf.formularz', compact('data'))->output();

        // mail do kierowcy
        \Mail::to($sign->email)->send(new NewRegister($sign, $pdf, $path));

        // mail do racegc
        \Mail::to(env('APP_MAIL'))->send(new NewRegister($sign, $pdf, $path));

        return redirect()->back()->with('success', "Zgłoszenie zostało przyjęte. Na Twój adres email zostanie wysłane potwierdzenie.");
    }

    public function test(){
        $sign = Sign::first();
        $data = $sign;

        $pdf = PDF::loadView('pdf.formularz', compact('data'))->output();

        // mail do kierowcy
        try{
            \Mail::to(env('APP_MAIL'))->send(new NewRegister($sign, $pdf, $sign->path));
        }
        catch(\Exception $e){
            dd($e);
        }
    }
}
