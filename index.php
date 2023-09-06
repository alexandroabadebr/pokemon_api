<?php

function api() {
	$url = "https://www.canalti.com.br/api/pokemons.json";
	$pokemons = json_decode(file_get_contents($url));
	foreach($pokemons->pokemon as $post) {
		print_r("<br><img src=$post->img />");
		print_r("<br><strong>name: $post->name</strong>");
		print_r("<br><strong>id: $post->id</strong>" . "\n");
	}
}

$pokemon_list = api();
echo $pokemon_list;
