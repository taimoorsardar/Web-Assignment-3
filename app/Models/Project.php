<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'fyp_group_id', 'project_name', 'location', 'keywords',
    ];

    public function fypGroup()
    {
        return $this->belongsTo(FYPGroup::class, 'fyp_group_id');
    }

    public function evaluations()
    {
        return $this->hasMany(ProjectEvaluation::class);
    }
}
