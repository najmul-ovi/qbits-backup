<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lname',
        'address',
        'phone',
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
    ];

    public function millerName()
    {
        return $this->belongsToMany(Miller::class, "agent_millers", 'agent_id','miller_id');
    }

    public function transport()
    {

        return $this->hasOne(Transport::class);

    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, "agent_millers", 'agent_id','miller_id');
    }

    public function banks()
    {
        return $this->hasMany(Bank::class, 'agent_id');
    }

    public function transports()
    {
        return $this->hasMany(Transport::class, 'agent_id');
    }



    public function order()
    {

        return $this->hasOne(Order::class);

    }

    public function purchaseorder()
    {

        return $this->hasMany(PurchaseOrder::class);

    }






}
