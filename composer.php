<?php
// Jika mendownload faker dengan composer
require_once 'vendor/autoload.php';
 
// inisialisasi faker
$faker = Faker\Factory::create('id_ID');
 
for($a=0; $a<10; $a++){
	// generate data nama, alamat
	echo $faker->name;
	echo "<br>";
}
?>