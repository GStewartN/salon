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
        protected function tearDown()
        {
            Stylist::deleteAll();
            Client::deleteAll();
        }

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
            $name = "Gabriel";
            $test_client = new Client($name, $stylist_id);
            $test_client->save();
            //Act
            $result = $test_client->getStylistId();
            //Assert
            $this->assertEquals($stylist_id, $result);
        }

        function testGetAll()
        {
            //Arrange
            $name = "Gabriel";
            $name_2 = "Stewart";
            $stylist_id = "";
            $stylist_id_2 = "";
            $test_client = new Client($name, $stylist_id);
            $test_client->save();
            $test_client_2 = new Client($name_2, $stylist_id_2);
            $test_client_2->save();
            //Act
            $result = Client::getAll();
            //Assert
            $this->assertEquals([$test_client, $test_client_2], $result);
        }

        function testDeleteAll()
        {
            //Arrange
            $name = "Gabriel";
            $name_2 = "Stewart";
            $stylist_id = "";
            $stylist_id_2 = "";
            $test_client = new Client($name, $stylist_id);
            $test_client->save();
            $test_client_2 = new Client($name_2, $stylist_id_2);
            $test_client_2->save();
            //Act
            Client::deleteAll();
            //Assert
            $result = Client::getAll();
            $this->assertEquals([], $result);
        }

        // function testFind()
        // {
        //     //Arrange
        //     $name = "Nathan";
        //     $name_2 = "Gabriel";
        //     $stylist_id = "";
        //     $stylist_id_2 = "";
        //     $test_client = new Client($name, $stylist_id);
        //     $test_client->save();
        //     $test_client_2 = new Client($name_2, $stylist_id_2);
        //     $test_client_2->save();
        //     //Act
        //     $result = Client::find($test_client->getId());
        //     //Assert
        //     $this->assertEquals($test_client, $result);
        // }

        function testUpdate()
        {
            //Arrange
            $name = "Nathan";
            $stylist_id = "";
            $test_client = new Client($name, $stylist_id);
            $test_client->save();
            $new_name = "Gabriel";
            //Act
            $test_client->update($new_name);
            //Assert
            $this->assertEquals("Gabriel", $test_client->getName());
        }

        function testDelete()
        {
            //Arrange
            $name = "Nathan";
            $name_2 = "Gabriel";
            $stylist_id = "";
            $stylist_id_2 = "";
            $test_client = new Client($name, $stylist_id);
            $test_client->save();
            $test_client_2 = new Client($name_2, $stylist_id_2);
            $test_client_2->save();
            //Act
            $test_client->delete();
            //Assert
            $this->assertEquals([$test_client_2], Client::getAll());
        }
    }
?>
