<?php
/**
 * Created by PhpStorm.
 * User: totorro
 * Date: 31.03.16
 * Time: 16:18
 */

namespace krproxy\excurso\Models;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ExCategory extends Model
{
    use NodeTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', '_lft', '_rgt', 'parent_id', 'note', 'desc', 'showtop', 'showside', 'showbottom', 'showcontent',
    ];

}