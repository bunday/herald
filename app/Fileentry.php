<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileentry extends Model
{
    //
    public static $uploadrule = array(
    	'uploadsermon'=>'mp3|max:64000'
    	);
}
