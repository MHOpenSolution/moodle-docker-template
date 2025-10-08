<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'db';
$CFG->dbname    = 'dbmoodlesample';
$CFG->dbuser    = 'moodlesample';
$CFG->dbpass    = 'moodlesample';
$CFG->prefix    = 'mdlse_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://moodlesample.com.my';
$CFG->dataroot  = '/var/moodledata/';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->reverseproxy = true;
$CFG->sslproxy  = true;


require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
