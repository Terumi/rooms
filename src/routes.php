<?php

    Route::group(['middleware' => 'ffy\rooms\ChangeRoomMiddleware'], function(){
        Route::get('rooms', 'ffy\rooms\RoomController@index');
    });

