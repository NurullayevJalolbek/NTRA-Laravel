<?php

use App\Models\Branch;
use App\Models\Status;
use App\Models\User;

//test('example', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
//});

//test('create a new ad', function () {
//
//    $response = $this->post('/ads/create', [
//        'title' => 'Test title',
//        'description' => 'Test description',
//        'price' => 50.00, // O'zgartirildi
//        'rooms' => 3, // O'zgartirildi
//        'address' => '123 Test St, Test City',
//        'gender' => 'male',
//        'user_id' => User::factory()->create()->id, // Foydalanuvchi yaratish
//        'branch_id' => Branch::factory()->create()->id, // Bo'lim yaratish
//        'status_id' => Status::factory()->create()->id, // Holat yaratish
//    ]);
//
//    $response->assertStatus(200);
//    $this->assertDatabaseHas('ads', [
//        'title' => 'Test title',
//        'description' => 'Test description',
//    ]);
//
//
//
//
//});
