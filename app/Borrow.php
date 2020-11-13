<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = 'borrows';

    protected $fillable = [
    	'member_id',
    	'book_id',
    	'status_id',
    ];
}
