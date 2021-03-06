<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   use HasFactory;
    #one To Many
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
