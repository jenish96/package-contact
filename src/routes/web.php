
<?php

// use Demo\Contact\Http\Controllers\ContactController;

use Demo\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace'=>'Demo\Contact\Http\Controllers'],function(){
    
    Route::get('contact',[ContactController::class,'viewForm']);
    
    Route::post('addContact',[ContactController::class,'addContact']);

});

?>