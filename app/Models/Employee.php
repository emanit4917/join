<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salary;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }
    public function department()
    {
        return $this->hasOne(Department::class);
    }
}
