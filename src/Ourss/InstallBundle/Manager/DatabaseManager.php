<?php
namespace Ourss\InstallBundle\Manager;

/**
 * Database Manager
 */
class DatabaseManager
{
    /**
     * Check if database was initialized
     *
     * @return boolean [description]
     */
    static public function isInitialized()
    {
        $conn = Doctrine_Manager::connection();

        try {
            $conn->execute("DESC feed");

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}