<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <meta name="viewport" content="width=device-width" />
    <title>Secure Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="flex flex-col min-h-screen">
    <header>
        <?php include 'templates/navbar.php'; ?>
    </header>

    <main class="flex-grow">
        <div class="max-w-5xl mx-auto mt-16 mb-2 px-4">
            <?php include $content; ?>
        </div>
    </main>

    <footer>
        <?php include 'templates/footer.php'; ?>
    </footer>
</body>
</html>