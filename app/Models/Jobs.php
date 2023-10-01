<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','job_category_id','job_title','company_address','min_salary','max_salary','qualification','responsibility','role','experience','description'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function jobcategory(){
        return $this->belongsTo(JobCategory::class,'job_category_id');
    }
}
