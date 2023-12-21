<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluatorDashboardController extends Controller
{
    public function index()
    {
        // Logic to retrieve evaluator information and assigned projects
        $evaluator = auth()->user(); // Assuming user is authenticated as evaluator
        $assignedProjectsCount = $evaluator->projects()->count(); // Example: Count assigned projects

        return view('evaluator.evaluator_dashboard', compact('evaluator', 'assignedProjectsCount'));
    }

    public function showAssignedProjects()
    {
        // Logic to retrieve and display assigned projects
    }

    public function evaluateProject($projectId)
    {
        // Logic to evaluate a specific project
    }

    // Additional methods for evaluator dashboard functionalities
}
