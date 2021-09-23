<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Worker;
class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'company_id';
    protected $table = 'companies';

    public function get_info()
    {
        return $this->belongsTo(Worker::class,'employee_id','worker_id')->select('worker_name');
    }
}
