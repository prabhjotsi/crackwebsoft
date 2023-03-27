<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'footer_section';

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
      protected $fillable = ['logo', 'logo_name', 'description', 'mail_address', 'address', 'phone', 'email', 'facebook', 'twitter', 'instagram', 'google_plus', 'linkedin'];


}
