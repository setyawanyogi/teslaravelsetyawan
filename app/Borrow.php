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

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'member_id');
    }

    public function book()
    {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
