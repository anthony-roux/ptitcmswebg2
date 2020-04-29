<?php
function getHeader(array $data) {
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Ptis Cms</title>
        <link href="../public/boostrap/css/bootstrap.css" rel="stylesheet">
        <link href="../public/css/bootstrap-theme.min.css" rel="stylesheet">
    </head>
    <body role="document">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">PETIT CMS<a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php
                        foreach ($data as $slug => $value) {
                            ?>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?=$slug?>"><?=$value['title']?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
    </nav>

    <?php
}

function getPage(array $toto) {
    ?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$toto['title']?></h1>
            <p><?=$toto['description']?></p>
            <span class="label btn btn-<?=$toto['span-label']?>"><?=$toto['span-text']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$toto['img-alt']?>" src="../public/img/<?=$toto['img']?>" data-holder-rendered="true">
    </div>
</div>
    <?php
}

function getFooter() {
    ?>
    </body>
    </html>
    <?php
}