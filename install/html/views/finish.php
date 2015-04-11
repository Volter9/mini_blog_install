<h2><?php echo $title ?></h2>

<p><?php echo 'hello' ?></p>

<p><?php echo 'database' ?></p>

<?php view('blocks/table', [
    'data' => $database,
    'prefix' => 'database.fields'
]) ?>

<p><?php echo 'admin' ?></p>

<?php 
$admin['password'] = str_repeat('*', strlen($admin['password']));

view('blocks/table', [
    'data' => $admin,
    'prefix' => 'admin.fields'
]) 
?>

<form action="<?php echo $url ?>" method="post">
    <button type="submit">
        <?php echo lang('common.continue') ?> 
    </button>
</form>