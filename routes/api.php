<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MemberController;

// memberのCRUD
Route::post('member', [MemberController::class, 'create']);
Route::get('member', [MemberController::class, 'fetch']);
Route::put('member', [MemberController::class, 'update']);
Route::delete('member', [MemberController::class, 'delete']);