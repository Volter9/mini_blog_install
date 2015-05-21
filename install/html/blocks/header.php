<header class="wrapper clearfix" id="header">
    <h1 class="left" id="mini_blog">
        mini_blog
        <small>
            <?php echo mb_version() ?> 
        </small>
    </h1>
    
    <div class="right" id="steps">
        <ul>
        <?php foreach (lang('steps') as $field): ?>
            <li class="<?php echo $step > 0 ? 'completed' : '' ?>">
                <?php echo $field; $step -- ?>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</header>