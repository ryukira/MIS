<?php

namespace App\Http\Controllers;

use App\Models\KlaimPerLob;
use App\Models\RekapKlaim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KlaimPerLobController extends Controller
{
    public function index()
    {
        $klaimPerLob = KlaimPerLob::all();
        return view('klaim.index', compact('klaimPerLob'));
    }

    public function sendData()
    {
        $klaimData = KlaimPerLob::whereIn('lob', ['KUR', 'PEN'])->get();

        DB::connection('secondary')->table('rekap_klaims')->insert($klaimData->map(function ($klaim) {
            return [
                'lob' => $klaim->lob,
                'penyebab_klaim' => $klaim->penyebab_klaim,
                'periode' => $klaim->periode,
                'jumlah_nasabah' => $klaim->jumlah_nasabah,
                'nilai_beban_klaim' => $klaim->nilai_beban_klaim,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        })->toArray());

        Log::info('Pengiriman data klaim selesai.', [
            'tanggal_proses' => now(),
            'jumlah_data' => $klaimData->count(),
            'status_pengiriman' => 'berhasil'
        ]);

        return response()->json(['message' => 'Data klaim berhasil dikirim.']);
    }
}
