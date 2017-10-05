<?php
Route::get('timezones/{timezone?}', 
  'wisdominfosoft\timezones\TimezonesController@index');