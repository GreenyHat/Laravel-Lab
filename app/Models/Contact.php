<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "phone_number",
        "email",
        "user_id",
        "age",
        "profile_picture",
    ];//Aqui ponemos lo que es rellenable en la base de datos, los datos que no esten aqui no seran trasladados a la bbdd

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sharedWithUsers() {
        return $this->belongsToMany(User::class, 'contact_shares');
    }
}
