<?php
include_once __DIR__ . '/classes/product.class.php';

$categories = [
    'arredamento' => [
        'cucina' => 'cucina',
        'bagno' => 'bagno'
    ],
    'elettrodomestici' => [
        'grandi-el' => 'grandi elettrodomestici',
        'piccoli-el' => 'piccoli elettrodomestici'
    ],
    'utensili' => [
        'cucina' => 'utensili cucina',
        'tavola' => 'utensili per la tavola'
    ]
];

$prodotto1 = new Prodotto_Categoria(24.00, 'Padella', 'Ottima per omelette', 'UC000', $categories['utensili']['cucina']);
$prodotto2 = new Prodotto_Categoria(5.00, 'Ciotola', 'In vetro temperato. 12cm di diametro', 'UC001', $categories['utensili']['cucina']);
$prodotto3 = new Prodotto_Categoria(2.50, 'Tovaglioli', 'In carta FSC. 100pz.', 'UT000', $categories['utensili']['tavola']);
$prodotto4 = new Prodotto_Categoria(999.99, 'Lavatrice', 'Ultima generazione', 'EG000', $categories['elettrodomestici']['grandi-el']);
$prodotto4 = new Prodotto_Categoria(789.00, 'Frigo', 'Veramente freddo', 'EG001', $categories['elettrodomestici']['grandi-el']);
$prodotto5 = new Prodotto_Categoria(300.00, 'Phon', 'Asciuga in 3 sec.', 'EP000', $categories['elettrodomestici']['piccoli-el']);
$prodotto6 = new Prodotto_Categoria(600.00, 'Tavolo', 'Un pò scomodo', 'AC000', $categories['arredamento']['cucina']);


$prodotti = [
    $prodotto1,
    $prodotto2,
    $prodotto3,
    $prodotto4,
    $prodotto5,
    $prodotto6
];

var_dump($prodotti);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova OOP</title>
</head>
<body>
    <h1>Lista prodotti e-commerce</h1>
    <h2><?php echo "Prodotti per la " .$categories['arredamento']['cucina']?></h2>
    <ul>
        <li><?php  ?></li>
    </ul>
    
</body>
</html>