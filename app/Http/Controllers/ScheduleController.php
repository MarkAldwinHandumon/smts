<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cause;
use App\Models\Classification;
use App\Models\Courses;
use App\Models\Disability;
use App\Models\Education;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('pages.guest.index', ['courses' => $courses]);
    }

    public function requirements()
    {
        return view('pages.guest.requirements');
    }

    public function fillUp()
    {
        $educations = Education::all();
        $classifications = Classification::all();
        $disablities = Disability::all();
        $causes = Cause::all();
        return view('pages.guest.form',['educations' => $educations,'classifications' => $classifications,'disablities' => $disablities,'causes' => $causes]);
    }
    
}
