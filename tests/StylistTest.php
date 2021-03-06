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

    class StylistTest extends PHPUnit_Framework_TestCase
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
            $test_stylist = new Stylist($name);
            //Act
            $result = $test_stylist->getName();
            //Assert
            $this->assertEquals($name, $result);
        }

        function testSave()
        {
            //Arrange
            $name = "Nathan";
            $test_stylist = new Stylist($name);
            //Act
            $executed = $test_stylist->save();
            // Assert
            $this->assertTrue($executed, "Stylist not successfully saved to database");
        }

        function testGetId()
        {
            //Arrange
            $name = "Nathan";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            //Act
            $result = $test_stylist->getId();
            //Assert
            $this->assertEquals(true, is_numeric($result));
        }

        function testGetAll()
        {
            //Arrange
            $name = "Nathan";
            $name_2 = "Gabriel";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist_2 = new Stylist($name_2);
            $test_stylist_2->save();
            //Act
            $result = Stylist::getAll();
            //Assert
            $this->assertEquals([$test_stylist, $test_stylist_2], $result);
        }

        function testDeleteAll()
        {
            //Arrange
            $name = "Nathan";
            $name_2 = "Gabriel";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist_2 = new Stylist($name_2);
            $test_stylist_2->save();
            //Act
            Stylist::deleteAll();
            $result = Stylist::getAll();
            //Assert
            $this->assertEquals([], $result);
        }

        function testFind()
        {
            //Arrange
            $name = "Nathan";
            $name_2 = "Gabriel";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist_2 = new Stylist($name_2);
            $test_stylist_2->save();
            //Act
            $result = Stylist::find($test_stylist->getId());
            //Assert
            $this->assertEquals($test_stylist, $result);
        }

        function testUpdate()
        {
            //Arrange
            $name = "Nathan";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $new_name = "Gabriel";
            //Act
            $test_stylist->update($new_name);
            //Assert
            $this->assertEquals("Gabriel", $test_stylist->getName());
        }

        function testDelete()
        {
            //Arrange
            $name = "Nathan";
            $name_2 = "Gabriel";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist_2 = new Stylist($name_2);
            $test_stylist_2->save();
            //Act
            $test_stylist->delete();
            //Assert
            $this->assertEquals([$test_stylist_2], Stylist::getAll());
        }

        function testDeleteStylistClients()
        {
            //Arrange
            $name = "Nathan";
            $name = "Gabriel";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $stylist_id = $test_stylist->getId();
            $test_client = new Client($name, $stylist_id);
            $test_client->save();


            //Act
            $test_stylist->delete();

            //Assert
            $this->assertEquals([], Client::getAll());
        }

        function testGetClients()
        {
            //Arrange
            $name = "Nathan";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist_id = $test_stylist->getId();

            $name = "Gabriel";
            $test_client = new Client($name, $test_stylist_id);
            $test_client->save();

            $name_2 = "Stewart";
            $test_client_2 = new Client($name_2, $test_stylist_id);
            $test_client_2->save();

            //Act
            $result = $test_stylist->getClients();

            //Assert
            $this->assertEquals([$test_client, $test_client_2], $result);
        }
    }
?>
