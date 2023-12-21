<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    public function index()
    {
        // Add logic to retrieve student information and pass it to the view
        $student = auth()->user(); // Assuming user is authenticated
        $projectsCount = $student->projects()->count(); // Example: Count projects related to the student

        return view('student.dashboard', compact('student', 'projectsCount'));
    }

}