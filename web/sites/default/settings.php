<?php

// @codingStandardsIgnoreFile

/**
 * Location of the site configuration files.
 */
$settings['config_sync_directory'] = '../config/sync/';
$settings['custom_translations_directory'] = '../config/translations';
$config['locale.settings']['translation']['path'] = '../config/translations';

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'YFLWJg462KdUbyFlWkFZjRJkHMiJfTdgU3FJX0JIo60HNA_OnSkWytyvmz_Yz1MZ2YQkjmU0lA';

/**
 * Deployment identifier.
 */
$settings['deployment_identifier'] = \Drupal::VERSION;

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Page caching:
 */
# $settings['omit_vary_cookie'] = TRUE;

/**
 * Default mode for directories and files written by Drupal.
 */
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;

/**
 * Temporary file path:
 *
 * A local file system path where temporary files will be stored. This directory
 * must be absolute, outside of the Drupal installation directory and not
 * accessible over the web.
 *
 * If this is not set, the default for the operating system will be used.
 *
 * @see \Drupal\Component\FileSystem\FileSystem::getOsTemporaryDirectory()
 */
# $settings['file_temp_path'] = '/tmp';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * The default number of entities to update in a batch process.
 */
$settings['entity_update_batch_size'] = 50;

/**
 * Entity update backup.
 */
$settings['entity_update_backup'] = TRUE;

/**
 * Node migration type.
 */
$settings['migrate_node_migrate_type_classic'] = FALSE;

/**
 * Ignores development related module on drush config:export
 */
$settings['config_exclude_modules'] = ['devel', 'devel_generate', 'webprofiler'];

/**
 * Load local development override configuration, if available.
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

