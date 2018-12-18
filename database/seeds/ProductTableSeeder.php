<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'name' 			=> 'Pollo a la brasa',
				'slug' 			=> 'pollo',
				'description' 	=> 'Sabroso pollo a la brasa con papas ensalada y gaseosa',
				'extract' 		=> 'Pollo a la brasa',
				'price' 		=> 12.00,
				'image' 		=> 'https://portal.andina.pe/EDPfotografia3/Thumbnail/2016/07/17/000365861W.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Salchipapa',
				'slug' 			=> 'salchipapa',
				'description' 	=> 'Deliciosa salchipapa con todas las cremas',
				'extract' 		=> 'Deliciosa salchipapa',
				'price' 		=> 5.00,
				'image' 		=> 'https://i0.wp.com/www.peruinforma.com/wp-content/uploads/2017/11/megaplaza-1.jpg?fit=800%2C600',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Hamburguesa',
				'slug' 			=> 'hamburguesa',
				'description' 	=> 'Deliciosa Hamburguesa con papas y ensalada',
				'extract' 		=> 'Deliciosa Hamburguesa.',
				'price' 		=> 5.00,
				'image' 		=> 'https://www.tgifridays.es/sites/default/files/styles/dish-menu/public/dish/fridays-classic-burgers/jack-daniels-burger.jpg?itok=gUUqE6vo',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Ceviche',
				'slug' 			=> 'ceviche',
				'description' 	=> 'Ceviche, de las mereas el mejor ceviche de puno',
				'extract' 		=> 'El mejor ceviche de la ciudad',
				'price' 		=> 15.00,
				'image' 		=> 'https://t2.rg.ltmcdn.com/es/images/7/4/1/img_ceviche_peruano_18147_600.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Chicharron',
				'slug' 			=> 'chicharron',
				'description' 	=> 'Rico chicharron de chanchito.',
				'extract' 		=> 'Chicharron de chanchito.',
				'price' 		=> 15.00,
				'image' 		=> 'https://unareceta.com/wp-content/uploads/2017/08/chicharron-.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Pizza',
				'slug' 			=> 'Pizza',
				'description' 	=> 'Deliciosa pizza con jarras de limonada de cortesia.',
				'extract' 		=> 'Deliciosa pizza.',
				'price' 		=> 20.00,
				'image' 		=> 'https://img.elcomercio.pe/files/article_content_ec_fotos/uploads/2018/02/20/5a8c5c32b8247.jpeg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			[
				'name' 			=> 'Bebidas',
				'slug' 			=> 'bebidas',
				'description' 	=> 'Pide las bebidas que quieras.',
				'extract' 		=> 'Las bebidas que tu quieras.',
				'price' 		=> 5.00,
				'image' 		=> 'https://www.coca-colamexico.com.mx/content/dam/journey/mx/es/private/historia/2017/septiembre/Aumentar-Portafolio-Opciones.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'De Todo',
				'slug' 			=> 'de-todo',
				'description' 	=> 'Te llevamos lo que quieras.',
				'extract' 		=> 'Pide lo que desees',
				'price' 		=> 25.00,
				'image' 		=> 'https://media.istockphoto.com/photos/assorted-grocery-products-minipackages-picture-id458968661',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 2
			],
			
		);

		Product::insert($data);

	}

}