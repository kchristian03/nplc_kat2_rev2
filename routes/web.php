<?php

use App\Http\Controllers\BonusScoreController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DebugController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LOController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\PuzzleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

function userRoute(): void
{
    Route::get('/user', [UserController::class, 'index'])->name('users.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/user', [UserController::class, 'store'])->name('users.store');
    Route::get('/user/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/user/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/user/{user}/restore', [UserController::class, 'restore'])->name('users.restore');

    Route::get('/user/{user}/resetPassword', [UserController::class, 'resetPassword'])->name('users.resetPassword');
}

Route::get('/', function () {
    return redirect('/login');
});

function itemRoute(): void
{
    Route::get('/item', [ItemController::class, 'index'])->name('items.index');
    Route::get('/item/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/item', [ItemController::class, 'store'])->name('items.store');
    Route::get('/item/{data}', [ItemController::class, 'show'])->name('items.show');
    Route::get('/item/{data}/edit', [ItemController::class, 'edit'])->name('items.edit');
    Route::put('/item/{data}', [ItemController::class, 'update'])->name('items.update');
    Route::delete('/item/{data}', [ItemController::class, 'destroy'])->name('items.destroy');
    Route::post('/item/{data}/restore', [ItemController::class, 'restore'])->name('items.restore');
}

function teamRoute(): void
{
    Route::get('/team', [TeamController::class, 'index'])->name('teams.index');
    Route::get('/team/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/team', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/team/{data}', [TeamController::class, 'show'])->name('teams.show');
    Route::get('/team/{data}/edit', [TeamController::class, 'edit'])->name('teams.edit');
    Route::put('/team/{data}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/team/{data}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::post('/team/{data}/restore', [TeamController::class, 'restore'])->name('teams.restore');
}

function posRoute(): void
{
    Route::get('/rally', [PosController::class, 'index'])->name('pos.index');
    Route::get('/rally/create', [PosController::class, 'create'])->name('pos.create');
    Route::post('/rally', [PosController::class, 'store'])->name('pos.store');
    Route::get('/rally/{data}', [PosController::class, 'show2'])->name('pos.show');
    Route::get('/rally/{data}/edit', [PosController::class, 'edit'])->name('pos.edit');
    Route::put('/rally/{data}', [PosController::class, 'update'])->name('pos.update');
    Route::delete('/rally/{data}', [PosController::class, 'destroy'])->name('pos.destroy');
    Route::post('/rally/{data}/restore', [PosController::class, 'restore'])->name('pos.restore');
}

function puzzleRoute(): void
{
    Route::get('/puzzle', [PuzzleController::class, 'index'])->name('puzzle.index');
    Route::get('/puzzle/create', [PuzzleController::class, 'create'])->name('puzzle.create');
    Route::post('/puzzle', [PuzzleController::class, 'store'])->name('puzzle.store');
    Route::get('/puzzle/{data}', [PuzzleController::class, 'show2'])->name('puzzle.show');
    Route::get('/puzzle/{data}/edit', [PuzzleController::class, 'edit'])->name('puzzle.edit');
    Route::put('/puzzle/{data}', [PuzzleController::class, 'update'])->name('puzzle.update');
    Route::delete('/puzzle/{data}', [PuzzleController::class, 'destroy'])->name('puzzle.destroy');
    Route::post('/puzzle/{data}/restore', [PuzzleController::class, 'restore'])->name('puzzle.restore');
}

function bonus_scoreRoute(): void
{
    Route::get('/bonus_score', [BonusScoreController::class, 'index'])->name('bonus_scores.index');
    Route::get('/bonus_score/create', [BonusScoreController::class, 'create'])->name('bonus_scores.create');
    Route::post('/bonus_score', [BonusScoreController::class, 'store'])->name('bonus_scores.store');
    Route::get('/bonus_score/{data}', [BonusScoreController::class, 'show'])->name('bonus_scores.show');
    Route::get('/bonus_score/{data}/edit', [BonusScoreController::class, 'edit'])->name('bonus_scores.edit');
    Route::put('/bonus_score/{data}', [BonusScoreController::class, 'update'])->name('bonus_scores.update');
    Route::delete('/bonus_score/{data}', [BonusScoreController::class, 'destroy'])->name('bonus_scores.destroy');
    Route::post('/bonus_score/{data}/restore', [BonusScoreController::class, 'restore'])->name('bonus_scores.restore');
}


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


//ROUTE FOR ADMIN/COMMITTEE
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:Super Admin|Admin|Committee',
])->group(function () {

    Route::get('/gamestart',[LOController::class,'globalTimer'])->name('gamestart');
    Route::get('/gamestop',[LOController::class,'globalTimerStop'])->name('gamestop');
    Route::get('/leaderboard', function () {
        return view('dashboard.committee.leaderboard.index');
    })->name('leaderboard');;

    userRoute();
    itemRoute();
    teamRoute();
    posRoute();
    puzzleRoute();
    bonus_scoreRoute();
});

//ROUTE FOR LO
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:LO Puzzle Pos 1|LO Puzzle Pos 2a|LO Puzzle Pos 2b LO Puzzle Pos 3a|LO Puzzle Pos 3b|LO Puzzle Pos 4a|LO Puzzle Pos 4b|LO Puzzle Pos 5|LO Rally Pos 1|LO Rally Pos 2|LO Rally Pos 3|LO Rally Pos 4|LO Rally Pos 5|LO Rally Pos 6|LO Rally Pos 7|LO Rally Pos 8|LO Rally Pos 9|LO Rally Pos 10|LO Rally Pos 11|LO Rally Pos 12|LO Rally Pos 13|LO Rally Pos 14|LO Rally Pos 15|LO Rally Pos 16|LO Rally Pos 17|LO Rally Pos 18',
])->group(function () {
    Route::get('/pos',[LOController::class,'index'])->name('pos');
    Route::get('/pos/{pos}',[PosController::class,'show'])->name('pos-detail');
    Route::post('/pos/{pos}',[PosController::class,'play'])->name('pos-play');
    Route::post('/pos-won', [PosController::class,'posWon'])->name('pos-won');
    Route::post('/pos-lost', [PosController::class,'posLost'])->name('pos-lost');
});

//ROUTE FOR LO PUZZLE
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:LO Puzzle Pos 1|LO Puzzle Pos 2a|LO Puzzle Pos 2b|LO Puzzle Pos 3a|LO Puzzle Pos 3b|LO Puzzle Pos 4a|LO Puzzle Pos 4b|LO Puzzle Pos 5',
])->group(function () {
    Route::post('/start-timer', [PuzzleController::class,'startTimer'])->name('start-timer');
    Route::get('/story/{puzzle}',[PuzzleController::class,'show'])->name('puzzle-detail');
    Route::get('/story/{puzzle}/{player}',[PuzzleController::class,'play'])->name('puzzle-play');
    Route::post('/puzzle-won', [PuzzleController::class,'puzzleWon'])->name('puzzle-won');
    Route::post('/puzzle-lost', [PuzzleController::class,'puzzleLost'])->name('puzzle-lost');
});

//ROUTE FOR LO RALLY
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:LO Rally Pos 1|LO Rally Pos 2|LO Rally Pos 3|LO Rally Pos 4|LO Rally Pos 5|LO Rally Pos 6|LO Rally Pos 7|LO Rally Pos 8|LO Rally Pos 9|LO Rally Pos 10|LO Rally Pos 11|LO Rally Pos 12|LO Rally Pos 13|LO Rally Pos 14|LO Rally Pos 15|LO Rally Pos 16|LO Rally Pos 17|LO Rally Pos 18',
])->group(function () {

});

//ROUTE FOR PLAYER
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:Player',
])->group(function () {
    Route::get('/puzzle/{puzzle}',[PlayerController::class,'puzzle']);
    Route::get('/rally/{pos}',[PlayerController::class,'rally']);
    Route::get('/play',[PlayerController::class,'index']);
});

//DEBUG OR DEMO ONLY
Route::get('/debug', [DebugController::class, 'index'])->name('debug');
Route::get('/debug/user', [DebugController::class, 'user'])->name('debug.user');
