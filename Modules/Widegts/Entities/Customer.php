<?php
namespace Modules\Widegts\Entities;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['firstname','lastname','shop_id','email','phone'];
    public function shops(){
        return $this->belongsTo(Shops::class,'shop_id');
    }
}