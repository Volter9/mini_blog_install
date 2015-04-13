<h1>Welcome!</h1>

<p>Choose installation language, please</p>

<form action="<?php echo $url ?>" method="post">
    <?php $errors = session('errors') and view('blocks/errors', compact('errors')) ?> 
    
    <div class="field clearfix">
        <label>Language:</label>
        
        <select name="language">
            <option value="">None</option>
            <option value="en_US">English</option>
            <option value="ru_RU">Русский (Russian)</option>
        </select>
    </div>
    
    <button class="button blue" type="submit">
        Select
    </button>
</form>