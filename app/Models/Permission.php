<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Permission
 * @package App\Models
 * @version November 25, 2017, 11:30 pm UTC
 *
 * @property string name
 * @property string title
 */
class Permission extends Model
{
    use SoftDeletes;

    public $table = 'permissions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3|max:50',
        'title' => 'required|min:3|max:150'
    ];

    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class,'role_permission');
    }
}
