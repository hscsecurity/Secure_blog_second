<?php
include 'includes/db.php';

$lang = $_GET['lang'] ?? 'pt';
$column_title = "title_$lang";
$column_content = "content_$lang";

$query = "SELECT $column_title AS title, $column_content AS content, id FROM articles ORDER BY created_at DESC";
$stmt = $pdo->query($query);

$textos = [
    'pt' => [
        'artigo' => 'Artigos'
    ],
    'en' => [
        'artigo' => 'Articles'
    ],
    'es' => [
        'artigo' => 'Publicaciones'
    ]
];
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
        <h1><?php 
           echo $textos[$lang]['artigo'];
        ?></h1>
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <div>
                    <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                    <p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </main>

    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>