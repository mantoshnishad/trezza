<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use App\Models\User;
use App\Models\WorkOrder;
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
        $user = Auth::user();
        $roles = $user->roles->pluck('id');
        $role_user_id = $roles->isEmpty() ? 0 : $roles[0];
        $customerFilter = function ($query) use ($user) {
            $role = $user->roles->first();
            $customer_id = $role->pivot->table_id ?? null;
            return $query->where('customer_id', $customer_id);
        };

        $employeeFilter = function ($query) use ($user) {
            $role = $user->roles->first();
            $employee_id = $role->pivot->table_id ?? null;
            return $query->whereHas('assign', function ($query) use ($employee_id) {
                $query->where('employee_id', $employee_id);
            });
        };
        $all_project = WorkOrder::when($role_user_id == 2, $customerFilter)
            ->when($role_user_id == 3, $employeeFilter)
            ->distinct('job_id')
            ->count();

        $live_project = WorkOrder::where('status_id', 1)->when($role_user_id == 2, $customerFilter)
        ->when($role_user_id == 3, $employeeFilter)
        ->distinct('job_id')
        ->count();

        $completed_project = WorkOrder::where('status_id', 2)
        ->where('process_id',2)
        ->when($role_user_id == 2, $customerFilter)
        ->when($role_user_id == 3, $employeeFilter)        
        ->count();

        $rejected_project = WorkOrder::where('status_id', 4)->when($role_user_id == 2, $customerFilter)
        ->when($role_user_id == 3, $employeeFilter)
        ->distinct('job_id')
        ->count();

        $workorders = WorkOrder::where('status_id', 1)->when($role_user_id == 2, $customerFilter)
        ->when($role_user_id == 3, $employeeFilter)
        ->get();

        $data = [
            'all_project' => $all_project,
            'live_project' => $live_project,
            'completed_project' => $completed_project,
            'rejected_project' => $rejected_project,
        ];

        return view('dashboard', compact('data', 'workorders'));
    }

    public function workorder()
    {


        if ($this->component_exists("workorder-component")) {
            $component = 'workorder';
            return view('masters', compact('component'));
        } else {
            return view('404');
        }
    }

    function component_exists($class)
    {
        $manifest = app(\Livewire\LivewireComponentsFinder::class)->getManifest();
        return (bool) array_key_exists($class, $manifest);
    }
}
