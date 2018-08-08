<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
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
        		'news_name'=>'bjdsvjsbj',
        		'news_slug'=>str_slug('bjvbjbv'),
        		'news_logo'=>'dvegvewfewfw',
        		'news_status'=>'1',
        		'news_content'=>'nslvjglw  joebvoebvo v ejo voe voe vjew vjk wvkj evwkj vkjw e',
        		'news_cate'=>'3',
        	],
        	[
        		'news_name'=>'bjdsvjsbj',
        		'news_slug'=>str_slug('bjvbjbv'),
        		'news_logo'=>'dvegvewfewfw',
        		'news_status'=>'1',
        		'news_content'=>'nslvjglw  joebvoebvo v ejo voe voe vjew vjk wvkj evwkj vkjw e',
        		'news_cate'=>'3',
        	],
        	[
        		'news_name'=>'wdwdd',
        		'news_slug'=>str_slug('bjvbjbv'),
        		'news_logo'=>'dvegvewfewfw',
        		'news_status'=>'1',
        		'news_content'=>'nslvjglw  joebvoebvo v ejo voe voe vjew vjk wvkj evwkj vkjw e',
        		'news_cate'=>'3',
        	],
        ];

        DB::table('vp_news')->insert($data);
    }
}
