<h2>Welcome!</h2>

<p>Choose installation language, please</p>

<form action="<?php echo $url ?>" method="post">
    <?php $errors = session('errors') and view('blocks/errors', compact('errors')) ?> 
    
    <select name="language">
        <option value="">None</option>
        <option value="en_US">English</option>
        <option value="ru_RU">Русский (Russian)</option>
    </select>
    
    <button type="submit">
        Select
    </button>
</form>