<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventRepetition extends Model
{

  use SoftDeletes;
  protected $table = 'event_repetition';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'event_id',
    'title',
    'rep_date',
    'rep_time',
    'frequence_en_jrs',
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
    'title' => 'string',
    'rep_date' => 'date',
    'rep_time' => 'string',
    'frequence_en_jrs' => 'string',
    'description' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
