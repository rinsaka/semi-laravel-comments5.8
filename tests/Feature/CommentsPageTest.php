<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentsPageTest extends TestCase
{
  /**
   * A basic feature test example.
   *
   * @return void
   */
  public function testExample()
  {
    $response = $this->get('/comments');
    $response->assertStatus(200);
  }

  public function testExample2()
  {
    $response = $this->get('/comments/3');
    $response->assertStatus(200);
  }

  public function testExample3()
  {
    $response = $this->get('/comments/3/edit');
    $response->assertStatus(200);
  }
}
