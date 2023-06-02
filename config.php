<?php
//PDO connection between PHP and database
class Connect extends PDO{
    //sets database attributes
    public function __construct()
    {
        parent::__construct("mysql:host=localhost;dbname=api", 'root', '',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        
    }
}
?>
