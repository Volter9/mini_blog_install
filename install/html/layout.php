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
        <h1 id="mini_blog">
            mini_blog
            <small>
                <?php echo mb_version() ?> 
            </small>
        </h1>
        
        <!-- Passing explicitly $__data__ -->
        <section id="content">
            <div id="steps">
                <ul>
                <?php foreach (lang('steps') as $field): ?>
                    <li class="<?php echo $step > 0 ? 'completed' : '' ?>">
                        <?php echo $field; $step -- ?>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
            
            <?php view($view, $__data__) ?> 
        </section>
    </body>
</html>