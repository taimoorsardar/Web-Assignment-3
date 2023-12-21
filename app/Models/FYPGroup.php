<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FYPGroup extends Model
{
    protected $fillable = [
        'group_name', 'project_details', 'keywords', 'admin_id',
    ];

    // Relationship: FYPGroup belongs to an AdminAccount (assuming one-to-one relationship)
    public function admin()
    {
        return $this->belongsTo(AdminAccount::class, 'admin_id');
    }

    // Relationship: FYPGroup has many projects
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    // Relationship: FYPGroup has many EvaluatorPreferences through projects
    public function evaluatorPreferences()
    {
        return $this->hasManyThrough(EvaluatorPreference::class, Project::class);
    }
    
    // Relationship: FYPGroup has many evaluations through projects
    public function projectEvaluations()
    {
        return $this->hasManyThrough(ProjectEvaluation::class, Project::class);
    }
    
    // You may define other relationships if needed based on your project requirements
}
