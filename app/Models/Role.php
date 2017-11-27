<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Role
 * @package App\Models
 * @version November 25, 2017, 11:28 pm UTC
 *
 * @property string name
 * @property string title
 */
class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    

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

    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Permission::class,'role_permission');
    }
}
