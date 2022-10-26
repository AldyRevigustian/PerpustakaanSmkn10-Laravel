<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}


// <?php

// namespace App\Http\Controllers;

// use App\Models\Visitor;
// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//      public function index()
//      {
//           $visitor = Visitor::all();
//           return view('welcome', compact('visitor'));
//      }

//      public function store(Request $request)
//      {
//           $visitor = Visitor::all();

//           $member_id = $request->member_id;
//           $member_name = $request->member_name;
//           $institution = $request->institution;

//           $visitor = Visitor::create([
//                'member_id' => $member_id,
//                'member_name' => $member_name,
//                'institution' => $institution,
//                'checkin_date' => date('Y-m-d H:i:s')
//           ]);

//           return redirect()->back();
//      }
// }

