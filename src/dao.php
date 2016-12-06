<?php

/**
 * Dao class file.
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

 /**
  * Dao class.
  *
  * @category  PHP
  * @package   Hello
  * @author    Jean-Rémy Falleri <jr.falleri@gmail.com>
  * @copyright 2016 Jean-Rémy Falleri
  * @license   BSD License
  * @link      https://github.com/jrfaller/php-stack-test
  */
class Dao
{
    var $db;

    /**
     * Constructor.
     *
     * @return Dao
     */
    function __construct()
    {
        $this->db = new SQLite3('data.db');
    }

    /**
     * Get all logins.
     *
     * @return Array<String>
     */
    function logins()
    {
        $logins = [];
        $results = $this->db->query('SELECT name FROM logins');
        while ($row = $results->fetchArray()) {
            array_push($logins, $row[0]);
        }
        return $logins;
    }
}
