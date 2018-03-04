<?php

Route::resource('tasks', 'TasksController', [
    'except' => ['create', 'edit', 'show']
]);
