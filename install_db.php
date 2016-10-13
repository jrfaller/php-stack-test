<?php

/**
 * DB installation file.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Hello
 * @author    Jean-Rémy Falleri <jr.falleri@gmail.com>
 * @copyright 2016 Jean-Rémy Falleri
 * @license   BSD License
 * @link      https://github.com/jrfaller/php-stack-test
 */

$db = new SQLite3('data.db');
$q_create = "CREATE TABLE logins(id INT PRIMARY KEY NOT NULL, name VARCHAR(100));";
$r = $db->query($q_create);

$q_ins1 = "INSERT INTO logins VALUES (0, 'JRe');";
$r = $db->query($q_ins1);

$q_ins2 = "INSERT INTO logins VALUES (1, 'Xavier');";
$r = $db->query($q_ins2);
