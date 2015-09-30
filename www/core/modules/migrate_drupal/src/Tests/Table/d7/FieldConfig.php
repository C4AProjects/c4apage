<?php

/**
 * @file
 * Contains \Drupal\migrate_drupal\Tests\Table\d7\FieldConfig.
 *
 * THIS IS A GENERATED FILE. DO NOT EDIT.
 *
 * @see core/scripts/migrate-db.sh
 * @see https://www.drupal.org/sandbox/benjy/2405029
 */

namespace Drupal\migrate_drupal\Tests\Table\d7;

use Drupal\migrate_drupal\Tests\Dump\DrupalDumpBase;

/**
 * Generated file to represent the field_config table.
 */
class FieldConfig extends DrupalDumpBase {

  public function load() {
    $this->createTable("field_config", array(
      'primary key' => array(
        'id',
      ),
      'fields' => array(
        'id' => array(
          'type' => 'serial',
          'not null' => TRUE,
          'length' => '11',
        ),
        'field_name' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '32',
        ),
        'type' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
        ),
        'module' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
          'default' => '',
        ),
        'active' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'storage_type' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
        ),
        'storage_module' => array(
          'type' => 'varchar',
          'not null' => TRUE,
          'length' => '128',
          'default' => '',
        ),
        'storage_active' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'locked' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'data' => array(
          'type' => 'blob',
          'not null' => TRUE,
          'length' => 100,
        ),
        'cardinality' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'translatable' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
        'deleted' => array(
          'type' => 'int',
          'not null' => TRUE,
          'length' => '11',
          'default' => '0',
        ),
      ),
      'mysql_character_set' => 'utf8',
    ));
    $this->database->insert("field_config")->fields(array(
      'id',
      'field_name',
      'type',
      'module',
      'active',
      'storage_type',
      'storage_module',
      'storage_active',
      'locked',
      'data',
      'cardinality',
      'translatable',
      'deleted',
    ))
    ->values(array(
      'id' => '1',
      'field_name' => 'comment_body',
      'type' => 'text_long',
      'module' => 'text',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:6:{s:12:"entity_types";a:1:{i:0;s:7:"comment";}s:12:"translatable";b:0;s:8:"settings";a:0:{}s:7:"storage";a:4:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '2',
      'field_name' => 'body',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:6:{s:12:"entity_types";a:1:{i:0;s:4:"node";}s:12:"translatable";b:0;s:8:"settings";a:0:{}s:7:"storage";a:4:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '3',
      'field_name' => 'field_tags',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:6:{s:8:"settings";a:1:{s:14:"allowed_values";a:1:{i:0;a:2:{s:10:"vocabulary";s:4:"tags";s:6:"parent";i:0;}}}s:12:"entity_types";a:0:{}s:12:"translatable";b:0;s:7:"storage";a:4:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"foreign keys";a:1:{s:3:"tid";a:2:{s:5:"table";s:18:"taxonomy_term_data";s:7:"columns";a:1:{s:3:"tid";s:3:"tid";}}}s:7:"indexes";a:1:{s:3:"tid";a:1:{i:0;s:3:"tid";}}}',
      'cardinality' => '-1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '4',
      'field_name' => 'field_image',
      'type' => 'image',
      'module' => 'image',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:6:{s:7:"indexes";a:1:{s:3:"fid";a:1:{i:0;s:3:"fid";}}s:8:"settings";a:2:{s:10:"uri_scheme";s:6:"public";s:13:"default_image";b:0;}s:7:"storage";a:4:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"entity_types";a:0:{}s:12:"translatable";b:0;s:12:"foreign keys";a:1:{s:3:"fid";a:2:{s:5:"table";s:12:"file_managed";s:7:"columns";a:1:{s:3:"fid";s:3:"fid";}}}}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '5',
      'field_name' => 'taxonomy_forums',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:6:{s:8:"settings";a:1:{s:14:"allowed_values";a:1:{i:0;a:2:{s:10:"vocabulary";s:6:"forums";s:6:"parent";i:0;}}}s:12:"entity_types";a:0:{}s:12:"translatable";b:0;s:7:"storage";a:4:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"foreign keys";a:1:{s:3:"tid";a:2:{s:5:"table";s:18:"taxonomy_term_data";s:7:"columns";a:1:{s:3:"tid";s:3:"tid";}}}s:7:"indexes";a:1:{s:3:"tid";a:1:{i:0;s:3:"tid";}}}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '6',
      'field_name' => 'field_boolean',
      'type' => 'list_boolean',
      'module' => 'list',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:2:{i:0;s:3:"Off";i:1;s:1:"1";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_boolean";a:1:{s:5:"value";s:19:"field_boolean_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_boolean";a:1:{s:5:"value";s:19:"field_boolean_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:1:"6";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '7',
      'field_name' => 'field_email',
      'type' => 'email',
      'module' => 'email',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_email";a:1:{s:5:"email";s:17:"field_email_email";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_email";a:1:{s:5:"email";s:17:"field_email_email";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:1:"7";}',
      'cardinality' => '-1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '8',
      'field_name' => 'field_phone',
      'type' => 'phone',
      'module' => 'phone',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:1:{s:7:"country";s:2:"cr";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_phone";a:1:{s:5:"value";s:17:"field_phone_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_phone";a:1:{s:5:"value";s:17:"field_phone_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:1:"8";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '9',
      'field_name' => 'field_date',
      'type' => 'datetime',
      'module' => 'date',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"hour";s:4:"hour";s:6:"minute";s:6:"minute";s:4:"year";s:4:"year";s:6:"second";i:0;}s:11:"tz_handling";s:4:"site";s:11:"timezone_db";s:3:"UTC";s:13:"cache_enabled";i:0;s:11:"cache_count";s:1:"4";s:6:"todate";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:21:"field_data_field_date";a:1:{s:5:"value";s:16:"field_date_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:25:"field_revision_field_date";a:1:{s:5:"value";s:16:"field_date_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:1:"9";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '10',
      'field_name' => 'field_date_with_end_time',
      'type' => 'datestamp',
      'module' => 'date',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"hour";s:4:"hour";s:6:"minute";s:6:"minute";s:4:"year";s:4:"year";s:6:"second";i:0;}s:11:"tz_handling";s:4:"site";s:11:"timezone_db";s:3:"UTC";s:13:"cache_enabled";i:0;s:11:"cache_count";s:1:"4";s:6:"todate";s:8:"optional";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_date_with_end_time";a:2:{s:5:"value";s:30:"field_date_with_end_time_value";s:6:"value2";s:31:"field_date_with_end_time_value2";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_date_with_end_time";a:2:{s:5:"value";s:30:"field_date_with_end_time_value";s:6:"value2";s:31:"field_date_with_end_time_value2";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:2:"10";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '11',
      'field_name' => 'field_file',
      'type' => 'file',
      'module' => 'file',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:3:{s:13:"display_field";i:0;s:15:"display_default";i:0;s:10:"uri_scheme";s:6:"public";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:21:"field_data_field_file";a:3:{s:3:"fid";s:14:"field_file_fid";s:7:"display";s:18:"field_file_display";s:11:"description";s:22:"field_file_description";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:25:"field_revision_field_file";a:3:{s:3:"fid";s:14:"field_file_fid";s:7:"display";s:18:"field_file_display";s:11:"description";s:22:"field_file_description";}}}}}s:12:"foreign keys";a:1:{s:3:"fid";a:2:{s:5:"table";s:12:"file_managed";s:7:"columns";a:1:{s:3:"fid";s:3:"fid";}}}s:7:"indexes";a:1:{s:3:"fid";a:1:{i:0;s:3:"fid";}}s:2:"id";s:2:"11";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '12',
      'field_name' => 'field_float',
      'type' => 'number_float',
      'module' => 'number',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:1:{s:17:"decimal_separator";s:1:",";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_float";a:1:{s:5:"value";s:17:"field_float_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_float";a:1:{s:5:"value";s:17:"field_float_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:2:"12";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '13',
      'field_name' => 'field_images',
      'type' => 'image',
      'module' => 'image',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:10:"uri_scheme";s:6:"public";s:13:"default_image";i:0;}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_images";a:5:{s:3:"fid";s:16:"field_images_fid";s:3:"alt";s:16:"field_images_alt";s:5:"title";s:18:"field_images_title";s:5:"width";s:18:"field_images_width";s:6:"height";s:19:"field_images_height";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_images";a:5:{s:3:"fid";s:16:"field_images_fid";s:3:"alt";s:16:"field_images_alt";s:5:"title";s:18:"field_images_title";s:5:"width";s:18:"field_images_width";s:6:"height";s:19:"field_images_height";}}}}}s:12:"foreign keys";a:1:{s:3:"fid";a:2:{s:5:"table";s:12:"file_managed";s:7:"columns";a:1:{s:3:"fid";s:3:"fid";}}}s:7:"indexes";a:1:{s:3:"fid";a:1:{i:0;s:3:"fid";}}s:2:"id";s:2:"13";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '14',
      'field_name' => 'field_integer',
      'type' => 'number_integer',
      'module' => 'number',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_integer";a:1:{s:5:"value";s:19:"field_integer_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_integer";a:1:{s:5:"value";s:19:"field_integer_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:2:"14";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '15',
      'field_name' => 'field_link',
      'type' => 'link_field',
      'module' => 'link',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:7:{s:10:"attributes";a:3:{s:6:"target";s:7:"default";s:5:"class";s:0:"";s:3:"rel";s:0:"";}s:3:"url";i:0;s:5:"title";s:8:"optional";s:11:"title_value";s:0:"";s:15:"title_maxlength";i:128;s:13:"enable_tokens";i:1;s:7:"display";a:1:{s:10:"url_cutoff";i:80;}}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:21:"field_data_field_link";a:3:{s:3:"url";s:14:"field_link_url";s:5:"title";s:16:"field_link_title";s:10:"attributes";s:21:"field_link_attributes";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:25:"field_revision_field_link";a:3:{s:3:"url";s:14:"field_link_url";s:5:"title";s:16:"field_link_title";s:10:"attributes";s:21:"field_link_attributes";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:2:"15";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '16',
      'field_name' => 'field_text_list',
      'type' => 'list_text',
      'module' => 'list',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:3:{s:9:"Some Text";s:9:"Some Text";s:14:"Some more text";s:14:"Some more text";s:7:"The key";s:9:"The label";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:26:"field_data_field_text_list";a:1:{s:5:"value";s:21:"field_text_list_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:30:"field_revision_field_text_list";a:1:{s:5:"value";s:21:"field_text_list_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:2:"16";}',
      'cardinality' => '3',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '17',
      'field_name' => 'field_integer_list',
      'type' => 'list_integer',
      'module' => 'list',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:5:{i:1;s:1:"1";i:2;s:1:"2";i:3;s:1:"3";i:6;s:1:"6";i:7;s:1:"9";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:29:"field_data_field_integer_list";a:1:{s:5:"value";s:24:"field_integer_list_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:33:"field_revision_field_integer_list";a:1:{s:5:"value";s:24:"field_integer_list_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:2:"17";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '18',
      'field_name' => 'field_long_text',
      'type' => 'text_with_summary',
      'module' => 'text',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:26:"field_data_field_long_text";a:3:{s:5:"value";s:21:"field_long_text_value";s:7:"summary";s:23:"field_long_text_summary";s:6:"format";s:22:"field_long_text_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:30:"field_revision_field_long_text";a:3:{s:5:"value";s:21:"field_long_text_value";s:7:"summary";s:23:"field_long_text_summary";s:6:"format";s:22:"field_long_text_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:2:"id";s:2:"18";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '20',
      'field_name' => 'field_term_reference',
      'type' => 'taxonomy_term_reference',
      'module' => 'taxonomy',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:1:{s:14:"allowed_values";a:1:{i:0;a:2:{s:10:"vocabulary";s:15:"test_vocabulary";s:6:"parent";s:1:"0";}}}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:31:"field_data_field_term_reference";a:1:{s:3:"tid";s:24:"field_term_reference_tid";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:35:"field_revision_field_term_reference";a:1:{s:3:"tid";s:24:"field_term_reference_tid";}}}}}s:12:"foreign keys";a:1:{s:3:"tid";a:2:{s:5:"table";s:18:"taxonomy_term_data";s:7:"columns";a:1:{s:3:"tid";s:3:"tid";}}}s:7:"indexes";a:1:{s:3:"tid";a:1:{i:0;s:3:"tid";}}s:2:"id";s:2:"20";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->values(array(
      'id' => '21',
      'field_name' => 'field_text',
      'type' => 'text',
      'module' => 'text',
      'active' => '1',
      'storage_type' => 'field_sql_storage',
      'storage_module' => 'field_sql_storage',
      'storage_active' => '1',
      'locked' => '0',
      'data' => 'a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:1:{s:10:"max_length";s:3:"256";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:21:"field_data_field_text";a:2:{s:5:"value";s:16:"field_text_value";s:6:"format";s:17:"field_text_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:25:"field_revision_field_text";a:2:{s:5:"value";s:16:"field_text_value";s:6:"format";s:17:"field_text_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:2:"id";s:2:"21";}',
      'cardinality' => '1',
      'translatable' => '0',
      'deleted' => '0',
    ))->execute();
  }

}
#73e7228808dbee3c78a696d6dc299e8a
