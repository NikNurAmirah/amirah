<?php

Route::get('/', function () {
    return view('home');
});

Route::auth();