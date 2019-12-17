<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $primaryKey='id_employee';
    protected $fillable = [
    		'name','alamat'
    ]
    

    public function jobs()
    {
        return $this->belongsTo('App\Jobs','id_jobs');
    }
}
