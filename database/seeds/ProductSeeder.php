<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products =
        [
            [
                'category_id' => 1,
                'name' => 'IPhone X64GB',
                'code' => 'iphone_x_64',
                'description' => 'The product is refurbished, fully functional, and in good condition. Backed by the 90-day Amazon Renewed Guarantee.',
                'price' => 71990,
            ],
            [
                'category_id' => 1,
                'name' => 'IPhone X256GB',
                'code' => 'iphone_x_256',
                'description' => 'The product is refurbished, fully functional, and in good condition. Backed by the 90-day Amazon Renewed Guarantee.',
                'price' => 89990,
            ],
            [
                'category_id' => 1,
                'name' => 'HTC One S',
                'code' => 'htc_one_s',
                'description' => 'The HTC One S (codenamed Ville) is a premium smartphone designed and manufactured by HTC as part of the HTC One series which has Beats Audio and runs the Android 4.0 "Ice Cream Sandwich" mobile operating system with HTC Sense. Announced by HTC on 26 February 2012, the HTC One S was scheduled for official release on 2 April 2012.',
                'price' => 12490,
            ],
            [
                'category_id' => 1,
                'name' => 'IPhone 5SE',
                'code' => 'iphone_5s',
                'description' => 'The iPhone 5S maintains almost the same external design as its predecessor, the iPhone 5, although the 5S received a new white/gold color scheme in addition to white/silver and space gray/black. The 5S has vastly upgraded internal hardware, however. It introduced the A7 64-bit dual-core system-on-chip, the first 64-bit processor to be used on a smartphone, accompanied by the M7 "motion co-processor". A redesigned home button with Touch ID, a fingerprint recognition system which can be used to unlock the phone and authenticate App Store and iTunes Store purchases, was also introduced. The camera was also updated with a larger aperture and a dual-LED flash optimized for different color temperatures. Earphones known as EarPods were included with the 5S, and Apple released accessories including a case and a dock. It had a 4-inch display, similar to the iPhone 5 and iPhone 5C.',
                'price' => 17221,
            ],
            [
                'category_id' => 2,
                'name' => 'Headphone Beats Audio',
                'code' => 'beats_audio',
                'description' => 'PREMIUM NOISE ISOLATION - Artix wired headphones with microphone use premium technology to remove 90% of external sounds, making them perfect noise canceling headphones for enjoying your media while commuting, exercising, or working - anytime.',
                'price' => 20221,
            ],
            [
                'category_id' => 2,
                'name' => 'Camera GoPro',
                'code' => 'gopro',
                'description' => 'This GoPro HERO11 Black Creator Edition Bundle equips you with a HERO11 Black action camera, Media Mod, Light Mod, and Volta Battery Grip. These included items make it easy for a content creator to set off on their next adventure and capture',
                'price' => 12000,
            ],
            [
                'category_id' => 2,
                'name' => 'Canon EOS RP',
                'code' => 'canon_eos_rp',
                'description' => 'Impressively small for a full-frame mirrorless camera, the Canon EOS RP offers dynamic imaging capabilities in a portable and lightweight design. Featuring a high-resolution 26.2MP full-frame CMOS sensor along with a DIGIC 8 image processor, both stills and UHD 4K video can be recorded using a broad sensitivity range, ',
                'price' => 27900,
            ],
            [
                'category_id' => 3,
                'name' => 'DeLonghi Dinamica',
                'code' => 'delonghi_dinamica',
                'description' => 'Iced Americanos can be yours at the touch of a button with the DeLonghi Dinamica Superautomatic Espresso Machine! The first of its kind, the Dinamica features a dedicated Iced Coffee button that lowers the temperature and lengthens the extraction time for a smooth, strong brew perfect to serve over ice. Built simply, the Dinamica also features dedicated buttons for espresso and classic coffee—meaning you"re only a touch away from your favorite cup of coffee. ',
                'price' => 25200,
            ],
            [
                'category_id' => 3,
                'name' => 'DeLonghi Dinamica',
                'code' => 'delonghi_dinamica',
                'description' => 'Iced Americanos can be yours at the touch of a button with the DeLonghi Dinamica Superautomatic Espresso Machine! The first of its kind, the Dinamica features a dedicated Iced Coffee button that lowers the temperature and lengthens the extraction time for a smooth, strong brew perfect to serve over ice. Built simply, the Dinamica also features dedicated buttons for espresso and classic coffee—meaning you"re only a touch away from your favorite cup of coffee. ',
                'price' => 25200,
            ],
            [
                'category_id' => 3,
                'name' => 'Fridge Haier',
                'code' => 'haier',
                'description' => 'Haier appliances are born for the city and designed to keep pace with a new way of living. Our appliances combine world-class design, innovative technology and a touch of city hustle, so you can live your best life 24/7. By making chores easier and life more livable, we bring the spirit of the city into your home. You can live life your way and, on your time, when you have our amazing appliances at your fingertips.',
                'price' => 40200,
            ],
            [
                'category_id' => 3,
                'name' => 'Blender Moulinex',
                'code' => 'moulinex',
                'description' => 'The High-Speed Blender offers an endless variety of smoothies and shakes blended to perfection, with an included recipe book to unlock your full creativity. Master over fifty different recipes—with healthy and delicious ideas for any occasion—and achieve ultimate smoothness with 5 easy-to-use automatic programs as well as manual settings.',
                'price' => 4200,
            ],
            [
                'category_id' => 3,
                'name' => 'Bosh grinder',
                'code' => 'bosh',
                'description' => 'The Bosch Meat Grinder Attachment makes processing fresh meat quick and easy. With the use of other attachments (sold separately), you can turn your Bosch into a noodle maker, grater, and more. If you have an older Universal mixer, this meat grinder attachment will fit with the use of an adapted Support Leg, sold separately. If you want to use this with your older Bosch Universal Mixer',
                'price' => 40200,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
