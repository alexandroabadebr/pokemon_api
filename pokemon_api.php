<?php

function api() {
	$url = "https://www.canalti.com.br/api/pokemons.json";
	$pokemons = json_decode(file_get_contents($url));
	foreach($pokemons->pokemon as $post) {
		print_r("<br>name: $post->name");
		print_r("<br>id: $post->id");
		print_r("<br><img src=$post->img /><hr>");
	}
}

$pokemon_list = api();
echo $pokemon_list;
