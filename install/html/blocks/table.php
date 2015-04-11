<table>
<?php foreach ($data as $key => $value): ?> 
    <tr>
        <td><?php echo lang("$prefix.$key") ?></td>
        <td><?php echo $value ?></td>
    </tr>
<?php endforeach; ?>
</table>