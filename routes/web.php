<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// how passing data works
Route::get('/ninjas', function () {
    $ninjas = [
        ["name" => "chi cheng", "skill" => 90, "id" => "1"],
        ["name" => "wo su wei", "skill" => 80, "id" => "2"],
    ];

    return view('ninjas.index', ["greeting" => "hellowww", "ninjas" => $ninjas]);
});

// route parameter ({id})
Route::get('/ninjas/{id}', function ($id) {
    $ninjas = [
        ["name" => "chi cheng", "skill" => 90, "id" => "1"],
        ["name" => "wo su wei", "skill" => 80, "id" => "2"],
    ];

    // fetch records with id to show.blade.php
    return view('ninjas.show', ["id" => $id]);
});
