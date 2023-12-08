<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Perangkat Elektronik Rumah Tangga'
            ],
            [
                'name' => 'Perangkat Komputer dan Aksesori'
            ],
            [
                'name' => 'Perangkat Elektronik Industri dan Perkantoran'
            ],
            [
                'name' => 'Komponen Elektronik'
            ],
        ];

        foreach ($data as $category) {
            $categoryId = DB::table('categories')->insertGetId([
                'name' => $category['name'],
            ]);

            $subcategories = [];

            switch ($category['name']) {
                case 'Perangkat Elektronik Rumah Tangga':
                    $subcategories = [
                        'Mesin cuci elektronik',
                        'Microwave',
                        'Oven listrik',
                        'Blender dan mixer elektronik',
                        'Kulkas dan freezer elektronik',
                    ];
                    break;

                case 'Perangkat Komputer dan Aksesori':
                    $subcategories = [
                        'Komputer desktop',
                        'Laptop dan notebook',
                        'Printer',
                        'Scanner',
                        'Mouse dan keyboard',
                        'Monitor',
                    ];
                    break;

                case 'Perangkat Elektronik Industri dan Perkantoran':
                    $subcategories = [
                        'Server',
                        'Switch dan router',
                        'Mesin fotokopi',
                        'Peralatan laboratorium elektronik',
                        'Peralatan pengukuran dan uji elektronik',
                    ];
                    break;

                case 'Komponen Elektronik':
                    $subcategories = [
                        'Integrated circuits (IC)',
                        'Transistor',
                        'Kapasitor',
                        'Resistor',
                        'PCB (Printed Circuit Board)',
                    ];
                    break;
            }

            foreach ($subcategories as $subcategory) {
                DB::table('sub_categories')->insert([
                    'name' => $subcategory,
                    'category_id' => $categoryId,
                ]);
            }
        }
    }
}
