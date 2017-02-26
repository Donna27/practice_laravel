<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
class F_national extends Model
{
    protected $table = "F_national";
    protected $fillable=[
        'national_name'
    ];
     public function users ()
  {
    return $this->hasMany(User::class, 'F_national', 'id')->get();
  }
}
