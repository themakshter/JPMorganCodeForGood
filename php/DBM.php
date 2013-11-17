<?php
/**
 * Created by PhpStorm.
 * User: IssacLam
 * Date: 11/16/13
 * Time: 7:48 PM
 */
class DBManager
{
    private static $conn;
    private static $initialized = false;


    private static function initialize()
    {
        $username = 'root';

        $password = 'bitnami';
        if (self::$initialized)
            return;
        try {
            self::$conn = $conn = new PDO("mysql:host=ec2-54-228-102-66.eu-west-1.compute.amazonaws.com;dbname=sei", $username, $password);
            self::$initialized = true;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public static function conn()
    {
        self::initialize();
        return self::$conn;
    }
}
?>