<?php

namespace Tests\Feature;

use App\Models\ClientOrder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientOrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function client_order_can_be_created()
    {
        $response = $this->post(route('client-order.store'), [
            'company' => 'test',
            'full_name' => 'test',
            'email' => 'test@test.com',
            'phone' => '130981734',
            'create_app' => 'true',
            'seo' => 'true',
            'mvp' => 'true',
        ]);

        $this->assertCount(1, ClientOrder::all());
        $response->assertRedirect(route('main-page'));
    }
}
