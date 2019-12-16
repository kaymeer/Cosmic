<?php
namespace Core;

use App\Config;

use Exception;
use PDO;
use Pixie\Connection;

class QueryBuilder {

    public function __construct() {
            $config = array(
                'driver'    => Config::driver, // Db driver
                'host'      => Config::host,
                'database'  => Config::database,
                'username'  => Config::username,
                'password'  => Config::password,
                'charset'   => Config::charset, // Optional
                'collation' => Config::collation, // Optional
                'prefix'    => Config::prefix, // Table prefix, optional
                'options'   => array(
                    PDO::ATTR_TIMEOUT => 5,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ),
            );

            new Connection('mysql', $config, 'QueryBuilder');
    }
}