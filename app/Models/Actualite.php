<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actualite extends Model
{

  use SoftDeletes;
  protected $table = 'actualite';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'titre',
    'sous_titre',
    'status',
    'contenu',
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
    'status' => 'string',
    'contenu' => 'string',
    'created_by_user_id' => 'integer',
  ];
}
