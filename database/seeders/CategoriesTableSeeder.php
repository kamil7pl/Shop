<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
			'Skarpetki',
			'Spodnie',
			'Koszulki',
			'Bluzy',
			'Czapki',
			'Buty'
		);
		foreach($categories as $category)
			Category::create([
				'name' => $category
			]);
    }
}
