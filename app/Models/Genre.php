<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'tbl_genre';
    protected $fillable = [
        'genre'
    ];


    public function get_id($id)
    {
        $data = Genre::where('id', $id)->first();
        return $data;
    }
}