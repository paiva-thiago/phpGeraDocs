<?php

    require_once 'vendor/autoload.php';

    $faker = Faker\Factory::create('pt_BR');
    
    echo "Gerando dados...\n ";
    echo "Nome: ".$faker->name."\n ";
    echo "Cpf: ".$faker->cpf."\n ";
    echo "Cnpj: ".$faker->cnpj."\n ";
?>