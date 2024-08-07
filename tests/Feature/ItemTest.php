<?php

use App\Models\Item;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;

uses(RefreshDatabase::class);

test('example', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('can get all items', function () {
    $response = $this->get('/api/items', [
        'Authorization' => 'Bearer ' . $this->getToken()
    ]);

    $response->assertStatus(200);
});

test('can get item by ID', function () {
    $item = Item::factory()->create();

    $response = $this->get('/api/items/' . $item->id, [
        'Authorization' => 'Bearer ' . $this->getToken()
    ]);

    $response->assertStatus(200)
             ->assertJson([
                 'id' => $item->id,
                 'name' => $item->name,
                 'description' => $item->description,
             ]);
});

private function getToken()
{
    $user = User::factory()->create();
    return Auth::login($user);
}
