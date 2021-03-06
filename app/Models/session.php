<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    //defining relationship between the tables
    public function chats(){
        return $this->hasManyThrough(Chat::class,Message::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

}
