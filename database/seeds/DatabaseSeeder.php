<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ArticlesTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(MenuTableSeeder::class);
         $this->call(ArticlePointsTableSeeder::class);
         $this->call(TodayWordsTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(AdminRoleTableSeeder::class);
    }
}
