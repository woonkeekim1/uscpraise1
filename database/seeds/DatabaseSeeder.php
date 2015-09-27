<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
		$this->call(DatabaseSeeder::sundaySermonSeeder());
        Model::reguard();
    }
    
    public function sundaySermonSeeder()
    {
    	$i = 0;
 	   	for ($i = 0; $i <= 100; $i++) 
 	  	{
  	 		DB::table('SundaySermon')->insert([
  	 				'title' => 'title' . $i,
  	 				'body' => "this is testing body " . $i,
  	 				'audio' => '/audios/sundaySermon' . $i . '.mp3',
  	 				'createdBy' => 1,
  	 				'sermonDate' => '2015/09/26',
  	 				]);
		}
    }
}
