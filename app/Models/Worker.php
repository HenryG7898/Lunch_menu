<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Company;

class Worker extends Model
{
    use HasFactory;

    protected $table = "workers";
    protected $primaryKey = "worker_id";

    public function getCum()
    {
        return $this->hasMany(Company::class,'employee_id','worker_id')->select('company_name');
    }
}
