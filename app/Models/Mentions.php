<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentions extends Model
{
    use HasFactory;
    public function attestation(){

        return $this->hasMany(Attestations::class);
    }
}
