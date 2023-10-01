<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description'];

    public function jobs()
    {
        return $this->hasMany(Jobs::class, "job_category_id", "id");
    }
    
}
