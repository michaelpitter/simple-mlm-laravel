<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    public function up(){
        return $this->belongsTo(Members::class);
    }
    public function down1(){
        return $this->belongsTo(Members::class);
    }
    public function down2(){
        return $this->belongsTo(Members::class);
    }

}
