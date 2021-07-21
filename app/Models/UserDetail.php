<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{

  use SoftDeletes;
  protected $table = 'user_details';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id',
    'sexe',
    'phone1',
    'phone2',
    'photo',
    'address1',
    'address2',
    'created_by_user_id',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'created_by_user_id', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'user_id' => 'integer',
    'sexe' => 'string',
    'phone1' => 'string',
    'phone2' => 'string',
    'photo' => 'string',
    'address1' => 'string',
    'address2' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
