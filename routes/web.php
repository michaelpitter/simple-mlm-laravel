<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('members',[
//         'members' => Members::all()
//     ]);
// });

Route::get('/', [MembersController::class,'index']);
Route::get('/member/delete/{members}', [MembersController::class,'destroy']);
Route::get('/member/create',[MembersController::class,'create']);
Route::post('/member',[MembersController::class,'store']);
