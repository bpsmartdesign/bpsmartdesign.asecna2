<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserContribution extends Model
{

  use SoftDeletes;
  protected $table = 'user_contribution';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id',
    'contribution_id',
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
    'contribution_id' => 'integer',
    'created_by_user_id' => 'integer',
  ];
}
