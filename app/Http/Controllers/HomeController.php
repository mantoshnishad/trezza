<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.index');
    }
    public function addProject()
    {
        return view('frontend.add_project');
    }
    public function customMadeJewelry()
    {
        return view('frontend.custom_made_jewellery');
    }
    public function ourServices()
    {
        return view('frontend.our_service');
    }
    public function casting()
    {
        return view('frontend.casting');
    }
    public function cleanScrapService()
    {
        return view('frontend.clean_scrap_service');
    }
    public function repairsServices()
    {
        return view('frontend.repair_services');
    }
    public function diamondsGemstones()
    {
        return view('frontend.diamonds_gemstones');
    }
    public function looseDiamonds()
    {
        return view('frontend.loose_diamonds');
    }
    public function tdPrinting()
    {
        return view('frontend.3d_printing');
    }
    public function molds()
    {
        return view('frontend.molds');
    }
    public function stoneSetting()
    {
        return view('frontend.stone_setting');
    }
    public function cadCam()
    {
        return view('frontend.cad_cam');
    }
    public function lineDeveloping()
    {
        return view('frontend.line_developing');
    }
    public function gallery()
    {
        return view('frontend.gallery');
    }
    public function upcomingShows()
    {
        return view('frontend.upcoming_shows');
    }
    public function frontendRegister()
    {
        return view('frontend.register');
    }

    public function cadPrintingServiceAndDesign()
    {
        return view('frontend.cad_printing_services_and_design');
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
