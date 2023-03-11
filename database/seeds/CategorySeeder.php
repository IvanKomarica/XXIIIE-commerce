<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =
        [
            [
                'name' => 'cell_phones',
                'code' => '1',
                'description' => 'Description of mobile phones',
            ],
            [
                'name' => 'portable_tech',
                'code' => '2',
                'description' => 'Description of portable equipment',
            ],
            [
                'name' => 'appliances',
                'code' => '3',
                'description' => 'Description of household appliances',
            ]
        ];
        DB::table('categories')->insert($categories);
    }
}
