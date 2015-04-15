<?php foreach ($fields as $field => $type): ?> 
<div class="field clearfix">
    <?php echo label($field, lang("$prefix.$field")); ?> 

    <div class="container">
        <?php echo generate_field(
            $type, 
            $field, 
            lang("$prefix.$field"), 
            array_get($input, $field)
        ); ?> 
    </div>
</div>
<?php endforeach; ?> 
