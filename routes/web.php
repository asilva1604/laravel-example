<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'greeting' => 'Hello',
        'name' => 'Alex',
        'jobs' => [
            ['title' => 'Utvecklare', 'id' => 1],
            ['title' => 'Lokforare', 'id' => 2],
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['title' => 'Utvecklare', 'id' => 1],
        ['title' => 'Lokforare', 'id' => 2]];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

