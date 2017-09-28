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
        DB::table('users')->insert([
        	[ 'name' => 'admin',
            'password' => bcrypt('123456')]
        	],
        	[ 'name' => 'admin2',
            'password' => bcrypt('123456')]
        	);
        DB::table('customer')->insert([
        	[ 'name' => 'smartosc',
            'password' => bcrypt('123456')]
        	],
        	[ 'name' => 'smartosc1',
            'password' => bcrypt('123456')]
        	);
        DB::table('brand')->insert([
        	[ 'name' => 'Sam Sung',
            'brand_slug' => 'sam-sung'],
            [ 'name' => 'Iphone',
            'brand_slug' => 'iphone']
        	]);
        DB::table('catagory')->insert([
        	[ 'name' => 'Smart Phone',
            'cata_slug' => 'smart-phone',
            'parent_id' => 0],
            [ 'name' => 'Android',
            'cata_slug' => 'android',
            'parent_id' => 1],
            [ 'name' => 'IOS',
            'cata_slug' => 'android',
            'parent_id' => 1],
            [ 'name' => 'Best Selling',
            'cata_slug' => 'best-selling',
            'parent_id' => 0]
        	]);
        DB::table('product')->insert([
        	[ 'pro_name' => 'Iphone 6 32GB',
            'pro_slug' => 'iphone-6-32gb',
            'pro_price' => 11000000,
            'price_sales' => 9000000,
            'is_sales' => 1,
            'pro_img' => '1.jpg',
            'description_id' => 1,
            'brand_id' => 1,
            'customer_id' => 1,
            'time' => '2017-09-12 00:01:00'],
            [ 'pro_name' => 'samsung s8',
            'pro_slug' => 'samsung-s8',
            'pro_price' => 13000000,
            'price_sales' => 8000000,
            'is_sales' => 0,
            'pro_img' => '2.jpg',
            'description_id' => 2,
            'brand_id' => 1,
            'customer_id' => 1,
            'time' => '2017-09-12 00:01:00']
        	]);
		DB::table('description')->insert([
        	[ 'description' => 'Hang công ty mới',
            'xuat_xu' => 'trung quốc',
            'bao_hanh' => '1đổi1',
            'tinh_trang' => 'mới 100%',
            'trang_thai' => 0],
            [ 'description' => 'Hang xách tay mới',
            'xuat_xu' => 'trung quốc',
            'bao_hanh' => '1đổi1',
            'tinh_trang' => 'mới 100%',
            'trang_thai' => 1]
        	]);
		DB::table('review')->insert([
        	[ 'comment' => 'Sản phẩm rất tốt',
            'rating' => 3.5,
            'pro_id' => 1,
            'customer_id' => 2,
            'time' => '2017-09-12 00:01:00'],
            [ 'comment' => 'Sản phẩm chưa tốt',
            'rating' => 2.5,
            'pro_id' => 2,
            'customer_id' => 1,
            'time' => '2017-09-13 00:01:00']
        	]);
    }
}
