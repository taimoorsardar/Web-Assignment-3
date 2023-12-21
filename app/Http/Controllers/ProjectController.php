<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Assuming Project model exists


class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::findOrFail($id); // Fetch project by ID
        $evaluatorsCount = $project->evaluatorsCount; 

        return view('project.view', compact('project','evaluatorsCount'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id); // Fetch project by ID
        // Return a view for editing project details
        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id); // Fetch project by ID
        // Update project details based on form data in $request
        $project->update($request->all());
        // Redirect to the project details view or other appropriate route
        return redirect()->route('projects.show', $project->id);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id); // Fetch project by ID
        // Delete the project
        $project->delete();
        // Redirect to a route (e.g., project listing) after deletion
        return redirect()->route('projects.index');
    }

    // Other methods for project-related functionalities
}