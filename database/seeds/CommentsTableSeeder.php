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
        'body' => '最初のコメントです！',
            'created_at' => '2019-07-01 10:10:10',
            'updated_at' => '2019-07-01 10:10:10'
    ]);

    DB::table('comments')->insert([
        'title' => '2つ目',
        'body' => '2つ目のコメントです！',
            'created_at' => '2019-07-01 10:20:10',
            'updated_at' => '2019-07-01 10:20:10'
    ]);

    DB::table('comments')->insert([
        'title' => '<三個目>のコメント',
        'body' => 'シーダによってテストデータを設定します．',
            'created_at' => '2019-07-01 10:30:10',
            'updated_at' => '2019-07-01 10:30:10'
    ]);

    $faker = Faker\Factory::create('ja_JP');

    $i = 1;
    while ($i < 98) {
      // created_at がID順になるような値を作る
      $s = floor($i / 2);    // 秒
      $m = $i % 10;          // 分   10で割った余り
      $h = floor($i / 10);   // 時
      $format = '2019-07-10 %02d:%02d:%02d';
      $created_at = sprintf($format, $h, $m, $s);
      // updated_at はランダムに
      $s = rand(0,59);
      $m = rand(0,59);
      $h = rand(0,23);
      $d = rand(1,30);
      $format = '2019-08-%02d %02d:%02d:%02d';
      $updated_at = sprintf($format, $d, $h, $m, $s);
      DB::table('comments')->insert([
        'title' => $faker->name,
        'body' => $faker->address . ' : ' . $faker->phoneNumber . ' : ' . $faker->email,
        'created_at' => $created_at,
        'updated_at' => $updated_at
      ]);
      $i++;
    }
  }
}
