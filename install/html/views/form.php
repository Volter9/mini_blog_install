<h2><?php echo $title ?></h2>

<p><?php echo $description ?></p>

<?php view('blocks/errors', compact('errors')) ?> 

<form action="<?php echo $url ?>" method="post">
    <?php view('blocks/form', compact('fields', 'input', 'prefix')) ?> 
    
    <button class="button blue" type="submit">
        <?php echo lang('common.continue') ?> 
    </button>
</form>
