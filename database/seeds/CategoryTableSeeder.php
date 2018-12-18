<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Category;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the Categories table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' => 'comida', 
				'slug' => 'comida', 
				'description' => 'productos comida', 
				'color' => '#440022'
			],
			[
				'name' => 'bebidas', 
				'slug' => 'bebidas', 
				'description' => 'productos bedidas', 
				'color' => '#445500'
			]
		);

		Category::insert($data);

	}
}