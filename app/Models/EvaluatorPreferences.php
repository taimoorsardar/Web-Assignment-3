<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EvaluatorPreference extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'evaluator_id', 'preferred_categories', 'specialty_areas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'evaluator_id');
    }
}
