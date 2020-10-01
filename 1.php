<?php
	$field_map = array(
    'fname'  => 'Name',
    'element_2'  => 'E-mail',
    'element_14' => 'City',
    'element_15' => 'Country'
);

$submitted_data = array('fields' => array());    
foreach ( $field_map as $key => $label) 
{
    $submitted_data['fields'][] = array(
        'key'   => $key,             // e.g. element_2
        'label' => $label,           // e.g. E-mail
         // e.g. john@example.com
    );
}
print_r($field_map);
?>