<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Pokemon extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
