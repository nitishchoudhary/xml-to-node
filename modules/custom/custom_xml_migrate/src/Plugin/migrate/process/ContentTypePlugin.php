<?php

/**
 * @file
 * Contains \Drupal\ custom_xml_migrate\Plugin\migrate\process\ContentTypePlugin.
 */

namespace Drupal\custom_xml_migrate\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;

/**
 * Defines content type name based on Path.
 *
 * @MigrateProcessPlugin(
 *   id = "content_type_plugin"
 * )
 */
class ContentTypePlugin extends ProcessPluginBase
{

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property)
  {
    return $value;
  }

}
