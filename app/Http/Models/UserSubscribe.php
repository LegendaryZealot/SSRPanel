<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 用户订阅地址
 * Class UserSubscribe
 * @package App\Http\Models
 */
class UserSubscribe extends Model
{
    protected $table = 'user_subscribe';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'code',
        'times',
        'created_at'
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}