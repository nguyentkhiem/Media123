<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
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
        		'image_name' => 'Ảnh thiên nhiên',
        		'image_slug' => str_slug('Ảnh thiên nhiên'),
        		'image_img' => 'uhovhiohvjhhiohihcvoh',
                'image_status'=>'1',
        		'image_info' => 'vbdsjvbdsjbvldsbvlk',
        		'image_cate' => '4',
        	],
        	[
        		'image_name' => 'Ảnh thiên nhiên hoang dã',
        		'image_slug' => str_slug('Ảnh thiên nhiên hoang dã'),
        		'image_img' => 'uhovhiohvio;j;;h;hhihcvoh',
                'image_status'=>'1',
        		'image_info' => 'vbdsjvbdsjbvldsbvlk',
        		'image_cate' => '4',
        	],
        	[
        		'image_name' => 'Ảnh động vật',
        		'image_slug' => str_slug('Ảnh thiên nhiên'),
        		'image_img' => 'uhovhiohvioohllbklbklbhihcvoh',
                'image_status'=>'1',
        		'image_info' => 'vbdsjvbdsjbvldsbvlk',
        		'image_cate' => '4',
        	],
        ];
        DB::table('vp_images')->insert($data);
    }
}
