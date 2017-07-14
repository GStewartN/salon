<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Stylist.php";
    require_once "src/Client.php";


    $server = 'mysql:host=localhost:8889;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ClientTest extends PHPUnit_Framework_TestCase
    {
      function testGetName()
      {
          //Arrange
          $name = "Nathan";
          $stylist_id = 1;
          $test_client = new Client($name, $stylist_id);
          //Act
          $result = $test_client->getName();
          //Assert
          $this->assertEquals($name, $result);
      }
    }
?>
