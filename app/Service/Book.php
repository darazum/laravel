<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.08.2019
 * Time: 1:30
 */

namespace App\Service;

use App\Book as BookModel;
use Barryvdh\Debugbar\Facade as Debugbar;

class Book
{
    public static function getRandomBook(&$randId)
    {
        $randId = mt_rand(60, 100);
        $book = BookModel::query()->where('id', '=', $randId)->first();
        return $book;
    }
}