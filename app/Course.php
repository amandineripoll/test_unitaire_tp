<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model 
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'date'
    ];

     /**
     * A course belongs to a room
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

         /**
     * A course belongs to a teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
