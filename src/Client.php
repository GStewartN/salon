<?php
    class Client
    {
        private $name;
        private $stylist_id;
        private $id;

        function __construct($name, $stylist_id, $id)
        {
            $this->name = $name;
            $this->stylist_id = $stylist_id;
            $this->id = $id;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setStylisdId($new_stylist_id)
        {
            $this->stylist_id = $new_stylist_id;
        }

        function getStylisdId()
        {
            return $this->stylist_id;
        }

        function getID()
        {
            return $this->id;
        }

        function getCategoryId()
        {
            return $this->category_id;
        }
    }
?>
