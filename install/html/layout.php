<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $title ?></title>
        <link href="<?php echo asset('install/css/main.css') ?>" 
              rel="stylesheet" 
              type="text/css"/>
    </head>
    
    <body>
        <?php view('blocks/header', $__data__) ?>
        
        <section class="wrapper" id="content">
            <?php view($view, $__data__) ?> 
        </section>
    </body>
</html>