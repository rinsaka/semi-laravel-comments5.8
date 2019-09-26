<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopPageTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testExample()
  {
    $response = $this->get('/');

    $response->assertStatus(200);
  }

  public function testExample2()  // 関数名が重複するとエラーになるので注意
  {
    $response = $this->get('/hoge');

    $response->assertStatus(404);
  }
}
