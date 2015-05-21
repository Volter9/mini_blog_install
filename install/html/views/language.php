<h1><?php echo lang('language.welcome') ?></h1>

<p><?php echo lang('language.choose') ?></p>

<form class="form" action="<?php echo $url ?>" method="post">
    <?php $errors = session('errors') and view('blocks/errors', compact('errors')) ?> 
    
    <div class="field clearfix">
        <label><?php echo lang('language.language') ?>:</label>
        
        <select name="language">
            <option value=""><?php echo lang('language.none') ?></option>
            <option value="en_US">English</option>
            <option value="ru_RU">Русский (Russian)</option>
        </select>
    </div>
    
    <div class="clearfix">
        <button class="right button blue" type="submit">
            <?php echo lang('common.select') ?>
        </button>
    </div>
</form>