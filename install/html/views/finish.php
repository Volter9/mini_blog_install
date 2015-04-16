<h2><?php echo $title ?></h2>

<p><?php echo lang('finish.text') ?></p>

<p>
    <?php echo lang('finish.database') ?>. 
    <a class="right" href="<?php echo url('?route=database') ?>">
        <?php echo lang('finish.fix') ?> 
    </a>
</p>

<?php view('blocks/table', array(
    'data' => $database,
    'prefix' => 'database.fields'
)) ?>

<p>
    <?php echo lang('finish.admin') ?>. 
    <a class="right" href="<?php echo url('?route=admin') ?>">
        <?php echo lang('finish.fix') ?> 
    </a>
</p>

<?php 
$admin['password'] = str_repeat('*', strlen($admin['password']));

view('blocks/table', array(
    'data' => $admin,
    'prefix' => 'admin.fields'
)) 
?>

<form action="<?php echo $url ?>" method="post">
    <button class="button green" type="submit">
        <?php echo lang('common.install') ?> 
    </button>
</form>