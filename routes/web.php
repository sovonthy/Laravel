<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('action','PagesController@action')->name('action');
Route::get('about','PagesController@about')->name('about');
Route::get('join','PagesController@join')->name('join');
Route::get('contact','PagesController@contact')->name('contact');
Route::get('news','PagesController@news')->name('news');
Route::get('showCustomer','PagesController@showCustomer')->name('showCustomer');
Route::get('student','StudentsController@showStudent');
Route::get('student/{name}','StudentsController@searchStudent');
Route::get('subject','SubjectsController@showSubject')->name('subject');

Route::get('/teacher/{index}', function($index) {
    $teachers = array('Channak','Ronan','Sieha','Rady','Rith');
    $countArray = 0;
    if($index < count($teachers)){
     echo"The teacher is:".$teachers[$index];
    }else {
        for ($i = 0; $i < count($teachers); $i++) {
            $countArray = count($teachers)-1;
            if($i < count($teachers)-1){
                echo "The array is: [$i].$teachers[$i],";
            }else if($i == count($teachers)-1){
                echo "[$i].$teachers[$i]";
            }
        }
        echo "<br>";
        echo "No teacher with this index: $index";
        echo "<br>";
        echo "The larget index is: ". $countArray;
    }
    return;
});
