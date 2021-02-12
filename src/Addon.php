<?php
namespace Jakebooy2\LaravelChargebee;


use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    protected $fillable = ['addon_id', 'quantity', 'name'];
}