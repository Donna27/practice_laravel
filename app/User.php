<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\F_national as F_national;
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'password','pid',
        'gender','address','mobilephone','national',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $dates = ['deleted_at'];
    
    public function national ()
    {
      return $this->belongsTo(F_national::class, 'national','id');
    }
    /**public function setSettingsAddressAttribute($value) {
        $this->attributes['address_desc'] = json_encode($value);
    }**/
    protected $casts = [
        'address' => 'array'
    ];
}
