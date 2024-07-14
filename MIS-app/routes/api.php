<?php

use App\Http\Controllers\KlaimPerLobController;

Route::post('/klaim/send', [KlaimPerLobController::class, 'sendData']);
