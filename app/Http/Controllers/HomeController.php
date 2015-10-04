<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('app');
    }


    /**
    TODO: Рутирай и използвай контролера за вход
    Направи база данни за регистрацията и метод за вход.

    --1. Направи разширеното търсене като прозорчето на входа и регистрацията
    2. На мястото на слайдера сложи 4 топ обяви от последните 100 рандом.
    3. В дясно до топ имотите, на мястото на разширеното търсене да се извеждат RSS новини
    4. На мястото на картинките за социланите мрежи да се сложи поле за бързо търсене
    5. Разширеното търсене да е динамично, да изкарва различни полета за различен вид имот(апартаменти, имоти, заведения).
        В началото да има списък с избор, който да отваря динамично нужните полета.
    6. Създай регистрацията
    */
}
