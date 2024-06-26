<?php
// Obtém o valor do parâmetro 'lang' da URL
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';

// Define os textos para cada idioma
$texts = [
    'pt' => [
        'title' => 'Bem-vindo ao Secure_Blog!',
        'description' => 'Este é um blog seguro onde você pode encontrar artigos interessantes.'
    ],
    'en' => [
        'title' => 'Welcome to Secure_Blog!',
        'description' => 'This is a secure blog where you can find interesting articles.'
    ],
    'es' => [
        'title' => '¡Bienvenido al Secure_Blog!',
        'description' => 'Este es un blog seguro donde puedes encontrar artículos interesantes.'
    ]
];

// Obtém os textos com base no idioma, ou usa o português como padrão
$title = $texts[$lang]['title'];
$description = $texts[$lang]['description'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width" />
    <title>Secure Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <?php include 'templates/navbar.php'; ?>
    </header>

    <main class="flex-grow">
        <div>
            <h1><?php echo $title; ?></h1>
            <p><?php echo $description; ?></p>
        </div>
    </main>

    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>