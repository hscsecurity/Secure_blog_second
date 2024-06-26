<?php
include 'includes/db.php';

$lang = $_GET['lang'] ?? 'pt';
$column_title = "title_$lang";

$query = "SELECT $column_title AS title, id FROM articles ORDER BY created_at DESC";
$stmt = $pdo->query($query);

$textos = [
    'pt' => [
        'lista' => 'Lista de Artigos'
    ],
    'en' => [
        'lista' => 'Articles'
    ],
    'es' => [
        'lista' => 'Publicaciones'
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
           echo $textos[$lang]['lista'];
        ?></h1>
            <ul>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <li><a href="post.php?lang=<?php echo $lang; ?>&id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    </main>

    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>