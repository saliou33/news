<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>SenNews...</title>
</head>
<body>
    <header>
        <div class="brand">
            <a href="/news_v2">Sen<span class="brand-id">News</span></a>
        </div>
        <nav class="nav">
            <ul>
                <?php foreach($categories as $category) {?>
                <li><a href="<?= "/news_v2?cat=".$category->name?>"><?= $category->name?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>