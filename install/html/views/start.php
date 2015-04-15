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
        <section id="end">
            <h1 id="mini_blog">
                mini_blog
                <small><?php echo mb_version() ?> </small>
            </h1>

            <p><?php echo lang('finish.installed') ?></p>

            <a class="button green" href="<?php echo url('') ?>"><?php echo lang('finish.visit.site') ?></a>

            <a class="button blue" href="<?php echo url('admin') ?>"><?php echo lang('finish.visit.admin') ?></a>
        </section>
    </body>
</html>
