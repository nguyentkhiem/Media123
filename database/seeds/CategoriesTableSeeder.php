<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        		'cate_name'=>'Movie',
        		'cate_slug'=>str_slug('Movie'),
        	],
        	[
        		'cate_name'=>'Music',
        		'cate_slug'=>str_slug('Music'),
        	],
        	[
        		'cate_name'=>'News',
        		'cate_slug'=>str_slug('News'),
        	],
        	[
        		'cate_name'=>'Images',
        		'cate_slug'=>str_slug('Images'),
        	],
        ];
        DB::table('vp_categories')->insert($data);
    }
}
