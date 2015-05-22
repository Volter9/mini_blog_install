<header class="wrapper clearfix" id="header">
    <h1 class="left" id="mini_blog">
        mini_blog
        <small>
            <?php echo mb_version() ?> 
        </small>
    </h1>
    
    <div class="right" id="steps">
        <ul>
        <?php $i = 1; foreach (lang('steps') as $route => $field): ?>
            <li class="<?php echo $step > 0 ? 'completed' : '' ?>">
                <a href="<?php echo url("?route=$route") ?>">
                    <?php echo $i ?>. 
                    <?php echo $field; $step --; $i ++; ?> 
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</header>