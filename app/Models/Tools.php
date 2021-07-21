<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tools extends Model
{

  use SoftDeletes;
  protected $table = 'instrument';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nom',
    'description',
    'quantite',
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
    'nom' => 'string',
    'description' => 'string',
    'quantite' => 'string',
    'status' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
