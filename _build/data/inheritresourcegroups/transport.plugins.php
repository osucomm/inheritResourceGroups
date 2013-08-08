<?php
/**
 * plugins transport file for inheritResourceGroups extra
 *
 * Copyright 2013 by Corey Hinshaw hinshaw.25@osu.edu
 * Created on 08-08-2013
 *
 * @package inheritresourcegroups
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $plugins */


$plugins = array();

$plugins[1] = $modx->newObject('modPlugin');
$plugins[1]->fromArray(array (
  'id' => 1,
  'property_preprocess' => false,
  'name' => 'inheritResourceGroups',
  'description' => 'Adds a child resource to each of its parent resource group(s)',
  'properties' => 
  array (
  ),
  'disabled' => false,
), '', true, true);
$plugins[1]->setContent(file_get_contents($sources['source_core'] . '/elements/plugins/inheritresourcegroups.plugin.php'));

return $plugins;
