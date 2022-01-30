<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SqlFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path('database/file.sql');
        $sql = file_get_contents($path);

      //  DB::table("posts")->get();

          DB::unprepared($sql);
      //  exec($sql);
    }

}
