<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // 一旦中身を削除する
    DB::table('comments')->delete();

    DB::table('comments')->insert([
        'title' => '最初のコメント',
        'body' => '最初のコメントです！'
    ]);

    DB::table('comments')->insert([
        'title' => '2つ目',
        'body' => '2つ目のコメントです！'
    ]);

    DB::table('comments')->insert([
        'title' => '<三個目>のコメント',
        'body' => 'シーダによってテストデータを設定します．'
    ]);

    $faker = Faker\Factory::create('ja_JP');

    $i = 1;
    while ($i < 98) {
      DB::table('comments')->insert([
        'title' => $faker->name,
        'body' => $faker->address . ' : ' . $faker->phoneNumber . ' : ' . $faker->email
      ]);
      $i++;
    }
  }
}
