<?php

$servers = [
    'mysql-5.7',
    'mysql-8.0',
    'bihive-prod.cluster-cptsbagbqhdi.eu-central-1.rds.amazonaws.com',
];

foreach ($servers as $key => $server) {
    $i = $key + 1; // "0" is not allowed key

    $cfg['Servers'][$i]['verbose']         = $server;
    $cfg['Servers'][$i]['host']            = $server;
    $cfg['Servers'][$i]['port']            = '%mysqlport%';
    $cfg['Servers'][$i]['socket']          = '';
    $cfg['Servers'][$i]['connect_type']    = 'tcp';
    $cfg['Servers'][$i]['compress']        = false;
    $cfg['Servers'][$i]['extension']       = 'mysqli';
    $cfg['Servers'][$i]['auth_type']       = 'cookie';
    $cfg['Servers'][$i]['AllowRoot']       = true;
    $cfg['Servers'][$i]['nopassword']      = true;
    $cfg['Servers'][$i]['AllowNoPassword'] = true;
}

$cfg['Servers'][] = [
    'verbose'         => 'raw-scraper-do-user-5393656-0.b.db.ondigitalocean.com',
    'host'            => 'raw-scraper-do-user-5393656-0.b.db.ondigitalocean.com',
    'port'            => 25060,
    'socket'          => '',
    'connect_type'    => 'tcp',
    'ssl'             => true,
    'compress'        => false,
    'extension'       => 'mysqli',
    'auth_type'       => 'cookie',
    'AllowRoot'       => true,
    'nopassword'      => true,
    'AllowNoPassword' => true,
];