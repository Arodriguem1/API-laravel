<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalculadoraControllerTest extends TestCase
{
    /** @test */
    public function suma_dos_numeros()
    {
        $response = $this->postJson('/api/sumar', ['a' => 5, 'b' => 3]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'resultado' => 8,
            ]);
    }

    /** @test */
    public function resta_dos_numeros()
    {
        $response = $this->postJson('/api/restar', ['a' => 5, 'b' => 3]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'resultado' => 2,
            ]);
    }
}