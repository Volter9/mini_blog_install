<?php 

/**
 * Validate fields
 * 
 * @param array $input
 * @param array $keys
 * @param string $message
 * @throws \Exception
 */
function required_fields (array $input, array $keys, $message) {
    foreach ($keys as $field) {
        if ($input[$field] === '') {
            throw new Exception($message);
        }
    }
}