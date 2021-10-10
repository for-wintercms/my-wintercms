<?php

// Favicon
Route::any('/favicon.ico', function(){ return 'favicon'; });

// System pages
Route::get('/{slug}', function(){
    abort(404);
})->where('slug', '(404|error|maintenance)');
