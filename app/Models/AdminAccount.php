<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAccount extends Model
{
    protected $fillable = [
        'full_name', 'position', 'contact_number', 'user_id',
    ];

    // Relationship: AdminAccount belongs to a User (assuming one-to-one)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relationship: AdminAccount has many FYPGroups
    public function fypGroups()
    {
        return $this->hasMany(FYPGroup::class, 'admin_id');
    }

    // Relationship: AdminAccount has many ProjectEvaluations through FYPGroups
    public function projectEvaluations()
    {
        return $this->hasManyThrough(ProjectEvaluation::class, FYPGroup::class);
    }

    // Relationship: AdminAccount has many EvaluatorPreferences through FYPGroups
    public function evaluatorPreferences()
    {
        return $this->hasManyThrough(EvaluatorPreference::class, FYPGroup::class);
    }

}
