<?php 

/**
 * Validate fields
 * 
 * @throws \Exception
 * @param array $input
 * @param array $keys
 * @param string $message
 */
function required_fields (array $input, array $keys, $message) {
    foreach ($keys as $field) {
        if ($input[$field] === '') {
            throw new Exception($message);
        }
    }
}

/**
 * Rather an assert than validation
 * 
 * @throws \Exception
 * @param bool $condition
 * @param string $message
 */
function validate ($condition, $message) {
    if (!$condition) {
        throw new Exception($message);
    }
}