<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(0,0) as $index) {
  	        DB::table('users')->insert([
  	            'name' => 'Vinay Paramanand',
  	            'email' => 'vinayparamanand@gmail.com',
                'password' => bcrypt('vinaytest'),
                'main_image_path'=>'/img/img.jpg',
                'active'=>1
              ]);
          }

      foreach (range(0,0) as $index) {
	        DB::table('socials')->insert([
	            'linkedin_url' => $faker->url,
              'contact_email' => $faker->url,
              'rss_feed' => $faker->text,
	            'quora_url' => $faker->url,
              'contact_email' => $faker->url
            ]);
        }



    }
}
