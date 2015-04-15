<?php

/**
 * Get key using dot notation in multidimensional array
 * 
 * @link https://gist.github.com/Volter9/e8568303a09716e72039
 * @param array $array
 * @param string $key
 * @return mixed
 */
function array_get ($array, $key) {
	$keys = explode('.', $key);
	$key = array_shift($keys);
	
	while ( is_array($array) && isset($array[$key]) ) {
		$array = $array[$key];
		
		$key = array_shift($keys);
	}
	
	if ($key !== null && !isset($array[$key])) {
		return false;
	}
	
	return $array;
}

/**
 * Set key using dot notation in multidimensional array
 * 
 * @link https://gist.github.com/Volter9/e8568303a09716e72039
 * @param array $array
 * @param string $key
 * @param mixed $value
 * @return mixed
 */
function array_set (&$array, $key, $value) {
	$keys = explode('.', $key);
	
	$temp = $array;
	$curs = &$temp;
	$key = array_shift($keys);
	
	while ( is_array($curs) && $key !== null ) {
		$curs = &$curs[$key];
		
		$key = array_shift($keys);
		
		if ( !isset($curs[$key]) ) {
			$curs[$key] = array();
		}
	}
	
	$curs = $value;
	$array = $temp;
}

/**
 * Extract array elements by specified keys
 * 
 * @param array $array
 * @param array $keys
 * @return array
 */
function array_extract (array $array, array $keys) {
    foreach ($array as $key => $value) {
        if (!in_array($key, $keys)) {
            unset($array[$key]);
        }
    }
    
    return $array;
}

/**
 * Remove keys specified in key array
 * 
 * @param array $array
 * @param array $keys
 * @return array
 */
function array_except (array $array, array $keys) {
    foreach ($array as $key => $value) {
        if (in_array($key, $keys)) {
            unset($array[$key]);
        }
    }
    
    return $array;
}