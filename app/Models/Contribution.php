<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contribution extends Model
{

  use SoftDeletes;
  protected $table = 'contribution';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'description',
    'status',
    'date_fin',
    'montant',
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
    'name' => 'string',
    'description' => 'string',
    'status' => 'string',
    'date_fin' => 'date',
    'montant' => 'integer',
    'created_by_user_id' => 'integer',
  ];
}
