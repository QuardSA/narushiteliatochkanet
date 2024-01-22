<?php

namespace App\Models;
use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = [
        'id',
        'title',
    ];
    public function application_status(){
        return $this->hasMany(Application::class, 'status', 'id');
    }
}
