<?php


namespace App\Entity;


class News extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'news';

    protected $fillable = ['name','title','title1', 'avatar','slag','type','text','text1', 'view'];
}
