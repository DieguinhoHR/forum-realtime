<?php

Route::get('/', function () {
    return view('threads.index');
});

Route::get('/threads/{id}', function ($id) {
    $result = \App\Thread::findOrFail($id);
    return view('threads.view', compact('result'));
});

Route::get('/locale/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return back();
});

Route::middleware(['auth'])
    ->group(function () {
        Route::get('/threads', 'ThreadController@index');
        Route::post('/threads', 'ThreadController@store');
        Route::put('/threads/{thread}', 'ThreadController@update');
        Route::get('/threads/{thread}/edit', function (\App\Thread $thread) {
            return view('threads.edit', compact('thread'));
        });
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
