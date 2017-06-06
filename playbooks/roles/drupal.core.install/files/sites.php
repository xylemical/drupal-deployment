<?php
/**
 * @file
 */

// Load the JSON file containing the sites mapping.
if (file_exists(__DIR__ . '/sites.json')) {
  $sites = json_decode(file_get_contents(__DIR__ .'/sites.json'), TRUE);
}
