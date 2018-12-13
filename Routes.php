<?php


Route::set('index.php', function(){
    View::make("Index");
});


Route::set('contact-us', function () {
    echo "Hello World";
});


Route::set('ashok',function(){
    View::make("Ashok");
});
Route::set('api',function(){
    View::make("Api");
});


Route::set("info", function(){
    phpinfo();
});

