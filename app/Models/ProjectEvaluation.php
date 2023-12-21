<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectEvaluation extends Model
{
    protected $fillable = [
        'evaluator_id', 'project_id', 'rating',
    ];

    // Relationship: ProjectEvaluation belongs to an Evaluator (assuming one-to-one)
    public function evaluator()
    {
        return $this->belongsTo(User::class, 'evaluator_id');
    }

    // Relationship: ProjectEvaluation belongs to a Project (assuming one-to-one)
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

}
