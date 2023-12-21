<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}

class User extends Model
{
    // Define any guarded or fillable attributes
    protected $fillable = [
        'name', 'email', 'password', 'usertype',
    ];

    // Relationship: User can be an evaluator for multiple projects
    public function projectsAsEvaluator()
    {
        return $this->hasMany(Project::class, 'assigned_evaluator_id');
    }

    // Relationship: User can have preferences for multiple project categories
    public function evaluatorPreferences()
    {
        return $this->hasMany(EvaluatorPreference::class);
    }

    // Relationship: User can perform evaluations for multiple projects
    public function projectEvaluations()
    {
        return $this->hasMany(ProjectEvaluation::class);
    }

    // Relationship: User can be an admin (assuming one-to-one relationship)
    public function adminAccount()
    {
        return $this->hasOne(AdminAccount::class);
    }
}
