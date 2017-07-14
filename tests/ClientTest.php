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

      function testSave()
      {
          //Arrange
          $name = "Nathan";
          $stylist_id = 1;
          $test_client = new Client($name, $stylist_id);
          //Act
          $executed = $test_client->save();
          // Assert
          $this->assertTrue($executed, "Client not successfully saved to database");
      }

      function testGetId()
      {
          //Arrange
          $name = "Nathan";
          $stylist_id = 1;
          $test_client = new Client($name, $stylist_id);
          $test_client->save();
          //Act
          $result = $test_client->getId();
          //Assert
          $this->assertEquals(true, is_numeric($result));
      }

      function testGetStylistId()
        {
            //Arrange
            $name = "Nathan";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $stylist_id = $test_stylist->getId();
            $name = "Wash the dog";
            $test_task = new Client($name, $stylist_id);
            $test_task->save();
            //Act
            $result = $test_task->getStylistId();
            //Assert
            $this->assertEquals($stylist_id, $result);
        }
    }
?>
