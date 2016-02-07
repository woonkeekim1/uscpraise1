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
		//$this->call(DatabaseSeeder::sundaySermonSeeder());
		$this->call(DatabaseSeeder::GalleryPrayAndSermonSeeder());
        Model::reguard();
    }
    
    public function sundaySermonSeeder()
    {
    	$i = 0;
 	   	for ($i = 1; $i <= 11; $i++) 
 	  	{
  	 		DB::table('SundaySermon')->insert([
  	 				'title' => 'title' . $i,
  	 				'body' => "this is testing body " . $i,
  	 				'audio' => '/audios/sundaySermon' . $i . '.mp3',
  	 				'createdBy' => 1,
  	 				'sermonDate' => '2015/09/' . $i,
  	 				'created_at' => '2015/09/' . $i,
  	 				'updated_at' => '2015/09/' . $i,
  	 				]);
		}
    }
    public function GalleryPrayAndSermonSeeder()
    {
    	$i = 0;
    	$today = getdate();
    	for($i = 0; $i <= 10; $i++)
    	{
    		DB::table('Gallery')->insert([
    				'title' => 'title' . $i,
    				'body' => "this is testing body " . $i,
    				'category' => 'PrayAndSermon',
    				'createdBy' => 1,
    				'header'=>'Group 2015',
    				'image'=>'/images/image' . (($i % 3)+1) . '.jpg',
    				'smallImage'=>'/images/image' . (($i % 3)+1) . '.jpg',
    				'created_at' => '2015-11-0' . $i,
    				
    				]);
    	}
    	for($i = 0; $i <= 10; $i++)
    	{
    		DB::table('Gallery')->insert([
    			'title' => 'title for Retreat' . $i,
    			'body' => "this is testing body  For Retreat" . $i,
    			'category' => 'Retreat',
    			'createdBy' => 1,
    			'header'=>'Group 2015',
    			'image'=>'/images/image' . (($i % 3)+1) . '.jpg',
    			'smallImage'=>'/images/image' . (($i % 3)+1) . '.jpg',
    			'created_at' => '2015-11-0' . $i,
    	
    		]);
    	}
    }
}
