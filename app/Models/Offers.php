<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Admin\Models\Group;
use Modules\Admin\Models\Position;
use Auth;

class Offers extends Authenticatable {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'offers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    //protected $dates = ['due_date'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    protected $guarded = ['created_at' , 'updated_at' , 'id' ];


    public  function assignUser()
    {
        return $this->hasOne('App\User','id','assignUserId') ;
    }

    public  function interestedUser()
    {
        return $this->hasMany('App\User','id','interestedUsreId')->select('id','first_name','last_name') ;
    }

    public function task()
    {
        return $this->belongsTo('App\Models\Tasks','taskId','id');
    }

    
}