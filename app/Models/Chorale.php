<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chorale extends Model
{

  use SoftDeletes;
  protected $table = 'chorale';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'logo',
    'address1',
    'address2',
    'description',
    'mail',
    'phone1',
    'phone2',
    'website_link',
    'facebook_link',
    'instagram_link',
  ];


  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'name' => 'string',
    'logo' => 'string',
    'address1' => 'string',
    'address2' => 'string',
    'description' => 'string',
    'mail' => 'string',
    'phone1' => 'string',
    'phone2' => 'string',
    'website_link' => 'string',
    'facebook_link' => 'string',
    'instagram_link' => 'string',
  ];
}
