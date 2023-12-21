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


    public function evaluations()
    {
        return $this->hasMany(ProjectEvaluation::class);
    }

    public function getEvaluatorsCountAttribute(){
        return $this->evaluations()->count(); 
    }
}
