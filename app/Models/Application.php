<?php

namespace App\Models;

use App\Models\User;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'id',
        'description',
        'car_number',
        'id_user',
        'status',
    ];
    public function status_application(){
        return $this-> belongsTo(Status::class, "status", "id");
    }
    public function user_application() {
        return $this->belongsTo(User::class,"id_user",'id');
    }
}
