<?php

use Illuminate\Database\Seeder;

class BannerTableSeeder extends Seeder
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
        		'banner_name'=>'sfafafaef',
        		'banner_link'=>'accacvavev',
        		'banner_price'=>1564,
        		'banner_logo'=>'acbeivewjkvb',
        		'banner_status'=>'1',
        	],
        	[
        		'banner_name'=>'vnsdvnklklvnvkln',
        		'banner_link'=>'nkjvbjbvkla cakjbckjabc acskjbc',
        		'banner_price'=> 454,
        		'banner_logo'=>'aamn jcbjb',
        		'banner_status'=>'1',
        	],
        	[
        		'banner_name'=>'acjba cakckja',
        		'banner_link'=>'oboabjcj blj',
        		'banner_price'=>454,
        		'banner_logo'=>'ajcbckjawbkj',
        		'banner_status'=>'1',
        	],
        	[
        		'banner_name'=>'nakn knkn ',
        		'banner_link'=>'bubcab jbkjb',
        		'banner_price'=>545,
        		'banner_logo'=>'veiohvio bklnkl',
        		'banner_status'=>'1',
        	],
        ];

        DB::table('vp_banner')->insert($data);
    }
}
