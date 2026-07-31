<?php

declare(strict_types=1);

/**
 * phpMyAdmin configuration
 */

$cfg['blowfish_secret'] = 'YfhFJMqxzjLmBSPKCnaG380Zot6v5RrV';


$i = 0;


/**
 * Server 1 - Local MySQL
 */
$i++;

$cfg['Servers'][$i]['verbose'] = 'Local MySQL';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['connect_type'] = 'tcp';

$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = '';

$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;



/**
 * Server 2 - Remote MySQL
 */
$i++;

$cfg['Servers'][$i]['verbose'] = 'Remote MySQL 10.1.1.14';
$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = '10.1.1.14';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['connect_type'] = 'tcp';

$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'pass123';

$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;


/**
 * Default server
 */
$cfg['ServerDefault'] = 2;


/**
 * Other settings
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';