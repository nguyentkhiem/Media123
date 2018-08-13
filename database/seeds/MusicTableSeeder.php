<?php

use Illuminate\Database\Seeder;

class MusicTableSeeder extends Seeder
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
        		'music_name'=>'No Brainer',
        		'music_slug'=>str_slug('No Brainer'),
        		'music_logo'=>'vkjbiudsvbsilbcls',
        		'music_status'=>'1',
        		'music_mp3'=>'https://www.nhaccuatui.com/lh/auto/IxWC97t8TGgF',
        		'music_info'=>'Artist: DJ Khaled, Justin Bieber, Chance The Rapper, Quavo. 
								Genre: Hip Hop. 
								Label: Sonymusic. 
								Release date: 28/07/2017. 
								Tracks: 1. 
								Quality: MP3-320kbps.',
				'music_cate'=>'2',
        	],
        	[
        		'music_name'=>'Darkside',
        		'music_slug'=>str_slug('Darkside'),
        		'music_logo'=>'vkjbiudsvbcssilbcls',
        		'music_status'=>'1',
        		'music_mp3'=>'https://www.nhaccuatui.com/lh/auto/hetwt66S2CA8',
        		'music_info'=>'Artist: Alan Walker feat. Au/Ra & Tomine Harket.
								Release Date: 27/07/2018.
								Genre: Dance.
								Tracks: 1. 
								Quality: Mp3-320kbps.',
				'music_cate'=>'2',
        	],
        	[
        		'music_name'=>'3 Đi',
        		'music_slug'=>str_slug('No Brainer'),
        		'music_logo'=>'vkjbiudsvbsisssslbcls',
        		'music_status'=>'1',
        		'music_mp3'=>'https://www.nhaccuatui.com/lh/auto/4m0XhXF3F4z6',
        		'music_info'=>'"3 Đi (Đi Đi Đi )" do chính K-ICM sáng tác và phối nhạc, cùng ICM TEAM làm việc miệt mài để kịp ra sản phẩm vào đúng ngày sinh nhật của K-ICM Nguyễn Bảo Khánh.',
				'music_cate'=>'2',
        	],
        ];
        DB::table('vp_music')->insert($data);
    }
}
