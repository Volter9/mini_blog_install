<h2><?php echo $title ?></h2>

<p><?php echo $description ?></p>

<?php view('blocks/errors', compact('errors')) ?>

<form action="<?php echo $url ?>" method="post">
    <?php view('blocks/form', compact('fields', 'input', 'prefix')) ?>
    
    <div class="clearfix">
        <button class="right button blue" type="submit">
            <?php echo lang('common.continue') ?> 
        </button>
    </div>
</form>