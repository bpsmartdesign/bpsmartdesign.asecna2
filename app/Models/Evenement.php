<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evenement extends Model
{

  use SoftDeletes;
  protected $table = 'evenement';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'titre',
    'sous_titre',
    'thumbnail',
    'date',
    'heure',
    'necessite_repetition',
    'description',
    'status',
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
    'titre' => 'string',
    'sous_titre' => 'string',
    'thumbnail' => 'string',
    'date' => 'date',
    'heure' => 'string',
    'necessite_repetition' => 'boolean',
    'description' => 'string',
    'status' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
