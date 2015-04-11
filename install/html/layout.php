<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $title ?></title>
        <link href="<?php echo path('install/css/main.css') ?>" 
              rel="stylesheet" 
              type="text/css"/>
    </head>
    
    <body>
        <h1>mini_blog</h1>
        
        <!-- Passing explicitly $__data__ -->
        <section id="content">
            <?php view($view, $__data__) ?> 
        </section>
    </body>
</html>