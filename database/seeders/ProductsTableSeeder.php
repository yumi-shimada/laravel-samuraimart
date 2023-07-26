<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = [
            6,9,8
        ];

        $ITbook_names = [
            'Java入門','C#入門','はじめてのプログラミング','ExcelVBA入門','AccessVBA入門','プログラミング応用'
        ];

        $photobook_names = [
            '百名山集','AKB48 PhotoCllection','綾瀬はるかファースト写真集','365日空'
        ];        

        $kidsbook_names = [
            'いないいないばあっ！','だるまさんが','おおきなかぶ','はらぺこあおむし'
        ];

        $prices = [1000,3000,4500,580];
        $randomPrice = $prices[array_rand($prices)];

        foreach ($category_id as $category_id){
            if ($category_id == 6) {
                foreach ($ITbook_names as $ITbook_names){
                    Product::create([
                        'name' => $ITbook_names,
                        'description' => $ITbook_names,
                        'price' => $randomPrice,
                        'category_id' => $category_id
                    ]);
                }
            }

            if ($category_id == 9) {
                foreach ($photobook_names as $photobook_names){
                    Product::create([
                        'name' => $photobook_names,
                        'description' => $photobook_names,
                        'price' => $randomPrice,
                        'category_id' => $category_id
                    ]);
                }
            }

            if ($category_id == 8) {
                foreach ($kidsbook_names as $kidsbook_names){
                    Product::create([
                        'name' => $kidsbook_names,
                        'description' => $kidsbook_names,
                        'price' => $randomPrice,
                        'category_id' => $category_id
                    ]);
                }
            }
        }


    }
}
