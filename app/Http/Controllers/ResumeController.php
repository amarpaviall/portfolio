<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResumeController extends Controller
{
    public function index()
    {
        //$resume = Storage::get('resume.json');
        $resume = Storage::disk('resumes')->get('resume.json');
        $resumeData = json_decode($resume, true);
        //dd($resumeData);
        return view('resume', ['resume' => $resumeData]);
    }
}
