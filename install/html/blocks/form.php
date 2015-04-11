<?php foreach ($fields as $field => $type): ?> 
<?php echo generate_field(
    $type, 
    $field, 
    lang("$prefix.$field"), 
    array_get($input, $field)
); ?>
<br/>
<?php endforeach; ?> 