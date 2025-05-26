<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServiceTest extends TestCase
{
    public function test_service_list_api()
    {
        $response = $this->getJson('/api/services?page=1');

        $response->assertStatus(200);
    }
}
