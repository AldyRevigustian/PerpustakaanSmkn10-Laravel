<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        $visitor = Visitor::orderBy('visitor_id', 'ASC')->get();;
        $member = Member::all();
        return view('landing', compact('visitor', 'member'));
    }

    public function store(Request $request)
    {
        $visitor = Visitor::all();

        $member_id = $request->member_id;
        $member_name = $request->member_name;
        $institution = $request->institution;

        // if($request){

        // }
        if ($member_id != null) {
            $cek = Member::where('member_id', $member_id)->first();
            if($cek){

                $visitor = Visitor::create([
                    'member_id' => $member_id,
                    'member_name' => $cek->member_name,
                    'institution' => $cek->inst_name,
                    'checkin_date' => date('Y-m-d H:i:s')
                ]);
            
            }
        }
        if($member_name != null && $institution != null){
            $visitor = Visitor::create([
                'member_id' => null,
                'member_name' => $member_name,
                'institution' => $institution,
                'checkin_date' => date('Y-m-d H:i:s')
            ]);
        }

        return redirect()->back();
    }
}
