<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavBar extends Model
{
      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'nav_bar';

      /**
      * The database primary key value.
      *
      * @var string
      */
      protected $primaryKey = 'id';

      /**
       * Attributes that should be mass-assignable.
       *
       * @var array
       */
      protected $fillable = ['logo', 'logo_name', 'home', 'home_style_1', 'home_style_2', 'home_style_3', 'about_us', 'services', 'faq', 'contact'];


}
