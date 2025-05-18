<?php
return [
  'database' => [
    'host' => 'localhost',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'tour_travel',
    'user' => 'root',
    'password' => '',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => false,
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => true,
  'cleanupAppLogPeriod' => '30 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1747507277.527602,
  'cryptKey' => '39f2ee1adee11d252302dacd268e8c68',
  'hashSecretKey' => '9ed1ef9fe1d57a0763fe78a1b12cf966',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.32',
  'instanceId' => 'd1b04792-ba03-46fa-aa1d-bb790bb2b27b'
];
