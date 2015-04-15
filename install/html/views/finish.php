<h2><?php echo $title ?></h2>

<p><?php echo lang('finish.text') ?></p>

<p><?php echo lang('finish.database') ?></p>

<?php view('blocks/table', array(
    'data' => $database,
    'prefix' => 'database.fields'
)) ?> 

<p><?php echo lang('finish.admin') ?></p>

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
