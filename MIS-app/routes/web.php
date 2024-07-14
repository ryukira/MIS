<?php

use App\Http\Controllers\KlaimPerLobController;

Route::get('/klaim', [KlaimPerLobController::class, 'index']);

