<p > 
    <img src="https://buenonetworks.com.br/img/logo_bueno_networks_.png">
</p>

# BNW: Conversor de decimal para tempo

![PHP Version](https://img.shields.io/badge/php-%5E7.2.0-blue)
![License](https://img.shields.io/badge/license-MIT-blue)
![TDD](https://img.shields.io/badge/tdd-Tested%20100%25-blue)

Ferramenta de fácil uso para conversão de decimal para tempo.

## Requisitos

Abaixo estão as configurações mínimas para usar a ferramenta.

- PHP >= 7.2.

## Como instalar

Para instalar o pacote em seu projeto, basta executar o comando abaixo na raiz do seu projeto.

```bash
composer require bnw/decimal-to-time-converter
```

## Como utilizar

Abaixo está um exemplo de como usar a ferramenta.

```php
<?php 

require_once __DIR__.'/vendor/autoload.php';

use BNW\Converter\DecimalToTime;

$converter = new DecimalToTime();
$converter->convert(0.08);   // 00:05
$converter->convert(0.17);   // 00:10
$converter->convert(1.5);    // 01:30
$converter->convert(246.70); // 246:42

```

## Como contribuir

Caso queira contribuir com ideias ou sugestões, por favor abra uma issue para iniciarmos um diálogo junto a equipe de desenvolvimento.

## Executando os testes

Para executar a bateria de testes, execute o comando abaixo na raiz do projeto.

```bash
composer tests
```

## Créditos

Orgulhosamente desenvolvido pela equipe da [Bueno Networks](http://www.buenonetworks.com.br)
