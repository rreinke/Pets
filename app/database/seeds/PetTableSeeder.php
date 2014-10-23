<?php

class PetTableSeeder extends Seeder {
	public function run() {
		DB::table('pets')->delete();
		DB::table('pettypes')->delete();

		DB::table('pets')->insert(array(
			array('id'=>1,'name'=>'Tigger','age'=>3,'pettype_id'=>2),
			array('id'=>2,'name'=>'Roxy','age'=>8,'pettype_id'=>1),
			array('id'=>3,'name'=>'Tonga','age'=>4,'pettype_id'=>1),
			array('id'=>4,'name'=>'Jasmine','age'=>13,'pettype_id'=>2),
			array('id'=>5,'name'=>'Buttons','age'=>10,'pettype_id'=>2),
			array('id'=>6,'name'=>'Clover','age'=>15,'pettype_id'=>3)
		));
		DB::table('pettypes')->insert(array(
			array('id'=>1,'name'=>"dog"),
			array('id'=>2,'name'=>"cat"),
			array('id'=>3,'name'=>"parrot")
		));

	}
}

?>