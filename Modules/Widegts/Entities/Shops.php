<?php
namespace Modules\Widegts\Entities;
use Illuminate\Database\Eloquent\Model;


class Shops extends Model
{
    protected $table = 'shops';
    protected $fillable = ['name','email','logo'];

    public function customer(){
        return $this->hasMany(Customer::class,'shop_id');
    }
}
