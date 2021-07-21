<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventType extends Model
{

  use SoftDeletes;
  protected $table = 'event_type';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'event_id',
    'nom',
    'description',
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
    'event_id' => 'integer',
    'nom' => 'string',
    'description' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
