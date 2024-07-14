<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\KlaimPerLob;

class KlaimPerLobTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_displays_klaim_per_lob()
    {
        KlaimPerLob::factory()->create([
            'lob' => 'KUR',
            'penyebab_klaim' => 'Kerugian',
            'periode' => '2024-01-01',
            'nilai_beban_klaim' => 1000000
        ]);

        $response = $this->get('/klaim');

        $response->assertStatus(200);
        $response->assertSee('KUR');
        $response->assertSee('Kerugian');
    }

    /** @test */
    public function it_sends_data_to_penampungan()
    {
        KlaimPerLob::factory()->create([
            'lob' => 'KUR',
            'penyebab_klaim' => 'Kerugian',
            'periode' => '2024-01-01',
            'nilai_beban_klaim' => 1000000
        ]);

        $response = $this->post('/api/klaim/send');

        $response->assertStatus(200);
        $this->assertDatabaseHas('rekap_klaims', [
            'lob' => 'KUR',
            'penyebab_klaim' => 'Kerugian'
        ], 'secondary');
    }
}
