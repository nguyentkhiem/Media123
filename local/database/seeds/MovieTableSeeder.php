<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
	        	'movie_name'=>'FICTION',
	        	'movie_slug'=>str_slug('FICTION'),
	        	'movie_logo'=>'asdfghj',
	        	'movie_status'=>'1',
	        	'movie_video'=>'ZAzWT8mRoR0',
	        	'movie_info'=>'asdfghjklluytrsdcvbnm',
	        	'movie_cate'=>'1',
        	],
        	[
	        	'movie_name'=>'Cry Cry MV',
	        	'movie_slug'=>str_slug('Cry Cry MV'),
	        	'movie_logo'=>'vjgvnvkenklanckla',
	        	'movie_status'=>'1',
	        	'movie_video'=>'-Ju79e8rM0c',
	        	'movie_info'=>'asdfghjklluydddtrsdcvbnm',
	        	'movie_cate'=>'1',
        	],
        	[
	        	'movie_name'=>'Because Im Stupid',
	        	'movie_slug'=>str_slug('Because Im Stupid'),
	        	'movie_logo'=>'asdfghdgtdhdbgsgvj',
	        	'movie_status'=>'1',
	        	'movie_video'=>'7gC4Dj9IqrQ',
	        	'movie_info'=>'asdfghjklluytrsdcvbnm',
	        	'movie_cate'=>'1',
        	],
        ];

        DB::table('vp_movie')->insert($data);
    }
}
