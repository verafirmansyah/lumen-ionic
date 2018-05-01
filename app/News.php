<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model item ads
 */
class News extends Model
{

  /**
   * Table database
   */
  protected $table = 'news_detail';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'nc_id','nd_title','nd_description','nd_image_path','nd_content',
  ];

}