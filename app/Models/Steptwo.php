<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Steptwo extends Model
{
    use HasFactory;
    protected $fillable=['stepone_id','max_X','min_X','max_Y','min_Y','max_Z','min_Z'];

    public function stepone(){
        return $this->hasOne(Stepone::class,'id','stepone_id');
    }
}
