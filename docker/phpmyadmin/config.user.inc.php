<?php

$servers = [
    'mysql-5.7',
    'mysql-8.0',
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
