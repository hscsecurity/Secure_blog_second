<?php
// Obtém o valor do parâmetro 'lang' da URL
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'pt';

// Define os textos para cada idioma
$texts = [
    'pt' => [
        'language' => 'Lingua',
        'home' => 'Inicio',
        'posts' => 'Postagens'
    ],
    'en' => [
        'language' => 'Language',
        'home' => 'Home',
        'posts' => 'Posts'
    ],
    'es' => [
        'language' => 'Idioma',
        'home' => 'Inicio',
        'posts' => 'Publicaciones'
    ]
];
?>

<?php
$blog_title = "Secure Blog";
$items = [
    ['title' => $texts[$lang]['home'], 'path' => 'index.php'],
    ['title' => $texts[$lang]['posts'], 'path' => 'posts.php'],
    ['title' => 'Blog', 'path' => 'blog.php']
];
?>
<script src="JS/navbar.js" defer></script>
<div class="flex bg-black text-white items-center">
    <div class="titulo font-bold text-lg ml-32 text-red-400 flex">
            <div class='position'>
                <label class='color_white' htmlFor="language-select"><?php
                    echo $texts[$lang]['language'];
                ?></label>
                <select
                    id="language-select"
                >
                    <option value="pt">Português</option>
                    <option value="en">English</option>
                    <option value="es">Español</option>
                </select>
            </div>
            <h2><?php echo $blog_title; ?></h2>
    </div>
    <div class="ml-auto mr-32">
        <ul class="flex">
            <?php foreach ($items as $item): ?>
                <li><a class="p-4 block" href="<?php echo $item['path']; ?>"><strong><?php echo $item['title']; ?></strong></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>