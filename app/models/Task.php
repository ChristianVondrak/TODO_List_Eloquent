<?php 
namespace App;
use Illuminate\Database\Eloquent\Model;



class Task extends Model{
    protected $table = 'todos';
    protected $fillable = [
        'title',
        'checked'
    ];
    protected $guarded = [];
    const UPDATED_AT=null;
}


?>