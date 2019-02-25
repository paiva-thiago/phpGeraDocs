<?php
require 'vendor/autoload.php';
//require 'Docs.php';

use Gui\Application;
use Gui\Components\Button;
use Gui\Components\InputText;
use Gui\Components\TextArea;

$faker = Faker\Factory::create('pt-br');

function generateTestData(){
    $faker = Faker\Factory::create('pt_BR');    
    return strtoupper("Gerando dados \n Nome: ".$faker->name."\n Cpf: ".$faker->cpf."\n Cnpj: ".$faker->cnpj."\n Endereco:".$faker->address);
}

$application = new Application();

$application->on('start', function() use ($application) {    
    $application->getWindow()->setTitle('Gerador de dados')->setWidth(332)->setHeight(150);
    
    $ta = (new TextArea())->setLeft(16)->setTop(50)->setWidth(300)->setValue(generateTestData());
    $button = (new Button())
        ->setLeft(16)
        ->setTop(16)
        ->setWidth(75)
        ->setValue('Gerar Dados');
    
    $button->on('click', function() use ($ta) {
        $ta->setValue(generateTestData());
    });
});

$application->run();