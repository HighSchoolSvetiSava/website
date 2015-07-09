<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School_Class extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'school_classes';

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
