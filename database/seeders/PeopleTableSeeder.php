<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $params = [
        'name' => 'taro',
        'mail' => 'taro@yamada.jp',
        'age' => 20,
      ];
      DB::table('people')->insert($params);

      $params = [
        'name' => 'sachiko',
        'mail' => 'sachiko@happy.jp',
        'age' => 56,
      ];

      DB::table('people')->insert($params);


        //
    }
}
