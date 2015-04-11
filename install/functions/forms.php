<?php 

/**
 * HTML label tag
 * 
 * @param string $name
 * @param string $label
 * @return string
 */
function label ($name, $label) {
    return sprintf('<label for="form_%s">%s</label>', $name, $label);
}

/**
 * HTML input type="text" tag
 * 
 * @param string $name
 * @param string $label
 * @param array|string $value
 * @return string
 */
function text_field ($name, $label, $value = null) {
    return input_field($name, $label, 'text', field_value($name, $value));
}

/**
 * HTML input type="password" tag
 * 
 * @param string $name
 * @param string $label
 * @param array|string $value
 * @return string
 */
function password_field ($name, $label, $value = null) {
    return input_field($name, $label, 'password', field_value($name, $value));
}

/**
 * Value extractor
 * 
 * @param string $name
 * @param array|string $value
 * @return string
 */
function field_value ($name, $value) {
    return is_array($value) && isset($value[$name]) ? $value[$name] : $value;
}

/**
 * HTML input template tag
 * 
 * @param string $name
 * @param string $label
 * @param string $type
 * @param string $value
 * @return string
 */
function input_field ($name, $label, $type, $value = null) {
    return sprintf(
        '<input id="form_%1$s" name="%1$s" placeholder="%2$s" type="%3$s" value="%4$s"/>',
        $name, $label, $type, $value
    );
}

function generate_field ($type, $name, $label, $value = null) {
    $result = '';
    $function = sprintf('%s_field', $type);
    
    $result .= label($name, $label);
    $result .= $function($name, $label, $value);
    
    return $result;
}

/**
 * Generate form fields
 * 
 * @param array $scheme
 * @return string
 */
function generate_form (array $scheme, array $input = []) {
    $result = '';
    
    foreach ($scheme as $field => $data) {
        $function = sprintf('%s_field', $data['type']);
        
        $label = $data['label'];
        
        $result .= label($field, $label);
        $result .= $function($field, $label, array_get($input, $field) ?: '');
        $result .= '<br/>';
    }
    
    return $result;
}