<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name'=>'iPhone X 128Gb',
                'images'=>'https://i.ebayimg.com/thumbs/images/g/tnAAAOSw~IVanb7t/s-l225.jpg',
                'description'=> 'Color: Mate Black, Storage: 128 Gb',
                'price'=> 1300,
            ],

            [
                'name'=>'Google Pixel 2 XL 128 Gb',
                'images'=>'https://cdn2.gsmarena.com/vv/bigpic/google-pixel-xl2-.jpg',
                'description'=> 'Color: White, Storage: 128 Gb',
                'price'=> 1000,
            ],

            [
                'name'=>'Sony Xperia XZ2',
                'images'=>'https://api.sonymobile.com/files/xperia-XZ2-silver-product-shot-2000x2000-5c3cb53f4777b7540e4f9bc7193d2a9c.png',
                'description'=> 'Color: White, Storage: 128 Gb',
                'price'=> 1000,
            ],

            [
                'name'=>'Surface Book Pro',
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtkSR58BNDSnOjTJNn35LkJEOG66cv9K_JKtOGfuv2Zjl1YI--dQ',
                'description'=> 'Color: Blue Cyan, Storage: SSD 256 Gb',
                'price'=> 3000,
            ],

            [
                'name'=>'Macbook Pro Retina 2017',
                'images'=>'https://www.bhphotovideo.com/images/images2000x2000/apple_me293ll_a_15_4_macbook_pro_notebook_1010896.jpg',
                'description'=> 'Color: Mate Black, Storage: SSD 512 Gb',
                'price'=> 3000,
            ],

            [
                'name'=>'Macbook Pro Retina 2017',
                'images'=>'https://www.bhphotovideo.com/images/images2000x2000/apple_me293ll_a_15_4_macbook_pro_notebook_1010896.jpg',
                'description'=> 'Color: Grey, Storage: SSD 512 Gb',
                'price'=> 3000,
            ],

            [
                'name'=>'Macbook Pro Retina 2017',
                'images'=>'https://www.bhphotovideo.com/images/images2000x2000/apple_me293ll_a_15_4_macbook_pro_notebook_1010896.jpg',
                'description'=> 'Color: White, Storage: SSD 512 Gb',
                'price'=> 3000,
            ],

            [
                'name'=>'Surface Laptop 2017',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/61EJz6KKOKL._SX425_.jpg',
                'description'=> 'Color: Grey, Storage: SSD 512 Gb',
                'price'=> 2000,
            ],

            [
                'name'=>'Macbook Air 2018',
                'images'=>'https://assets.pcmag.com/media/images/292427-apple-macbook-air-13-inch-mid-2012.jpg',
                'description'=> 'Color: White, Storage: SSD 256 Gb',
                'price'=> 1000,
            ],

            [
                'name'=>'Macbook Air 2018',
                'images'=>'https://assets.pcmag.com/media/images/292427-apple-macbook-air-13-inch-mid-2012.jpg',
                'description'=> 'Color: Black, Storage: SSD 256 Gb',
                'price'=> 1000,
            ],

            [
                'name'=>'Fujifilm Instax Mini 9',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/81WQaoWP60L._SX425_.jpg',
                'description'=> 'Color: White',
                'price'=> 300,
            ],

            [
                'name'=>'Canon PowerShot SX420',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/41kpkeoa2cL._SX425_.jpg',
                'description'=> 'Digital Camera w/42x Optical Zoom - Wi-Fi & NFC',
                'price'=> 800,
            ],

            [
                'name'=>'EOS 6D Mark II',
                'images'=>'https://m.media-amazon.com/images/S/aplus-media/vc/c67f115e-3376-48c6-8a20-e2b345e47179._SR300,300_.gif',
                'description'=> 'N/A',
                'price'=> 1000,
            ],

            [
                'name'=>'Leica C Camera 18485 12.1MP Mirrorless',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/61lfzzrsNnL._SX425_.jpg',
                'description'=> ' Digital Camera with 3-Inch LCD - Light',
                'price'=> 1000,
            ],

            [
                'name'=>'Amazon Adds New Echo Models to Next-Generation Smart Home Lineup',
                'images'=>'http://www.eweek.com/imagesvr_ez/b2bezp/2017/10/AmazonNewEcho_0.jpg',
                'description'=> 'Amazon has introduced an updated Echo smart home device along with three new models, the Echo Plus.',
                'price'=> 1000,
            ],

            [
                'name'=>'Amazon targeting smart homes as five new Echo devices unveiled',
                'images'=>'http://home.bt.com/images/amazon-targeting-smart-homes-as-five-new-echo-devices-unveiled-136421636315803901-170927232019.jpg',
                'description'=> 'Amazon has introduced an updated Echo smart home device along with three new models, the Echo Spot',
                'price'=> 1000,
            ],

            [
                'name'=>'BAmazon Echo Brings Voice-Control',
                'images'=>'https://www.technobuffalo.com/wp-content/uploads/2016/09/echo-plus-ecobee3-smart-thermostat-470x310@2x.jpg',
                'description'=> 'Insteon today announced that you can control Insteon devices with Amazon Echo.',
                'price'=> 1000,
            ],

            [
                'name'=>'OtterBox DEFENDER iPhone 6/6s Case',
                'images'=>'https://images-na.ssl-images-amazon.com/images/G/01/img15/wireless-products/tile/25651_wp_iphone-accessories-storefront-lift_short-tile3_738x440.jpg',
                'description'=> 'Frustration-Free Packaging - BLACK',
                'price'=> 1000,
            ],

            [
                'name'=>'Leather Origami Case for Fire HDX 8.9 (4th Generation)',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/811-x3E6AkL._AC_SX220_SY220_.jpg',
                'description'=> 'Blue',
                'price'=> 1000,
            ],

            [
                'name'=>'Standing Leather Case for Fire HD 7 (4th Generation)',
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/91broBv5p9L._AC_SX220_SY220_.jpg',
                'description'=> 'Black',
                'price'=> 1000,
            ],
        ]);
    }
}
