<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class SubChapter extends Model
{
	public $table = "sub_chapters";
    use UuidTrait;

    protected $fillable =[
    	'uuid','thumbnail','description','Content'
    ];
}
