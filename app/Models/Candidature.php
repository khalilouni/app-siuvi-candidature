<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = ["poste", "description", "companyName", "datePostulation", "dateLimite", "requisPoste", "contactCampany", "emailRhCampany", "captureEcran"];

}
