<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 4; // unique id for next installed extension

$installed_extensions = array (
  0 => 
  array (
    'name' => 'British COA',
    'package' => 'chart_en_GB-general',
    'version' => '2.4.1-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_GB-general.sql',
  ),
  1 => 
  array (
    'name' => 'English Singapore 4 digits COA',
    'package' => 'chart_en_SG-general',
    'version' => '2.4.1-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_SG-new.sql',
  ),
  2 => 
  array (
    'name' => 'General 4 digit COA for new company in US',
    'package' => 'chart_en_US-4digit',
    'version' => '2.4.1-4',
    'type' => 'chart',
    'active' => false,
    'path' => 'sql',
    'sql' => 'en_US-4digit.sql',
  ),
  3 => 
  array (
    'name' => 'Theme Anterp',
    'package' => 'anterp',
    'version' => '2.4.0-1',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/anterp',
  ),
);
