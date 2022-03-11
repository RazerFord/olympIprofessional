<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = 'participants';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'promotion_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'promotion_id', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that cannot be massively assigned.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 'updated_at'
    ];
}
