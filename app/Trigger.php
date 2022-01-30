<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Trigger
{
    private static $instanceof;
    private $sql;

    public function __construct()
    {
    }

    public function createBeforeDelete($name,$table,$sql)
    {
        $this->sql  = 'DELIMITER //';
        $this->sql .= "CREATE TRIGGER ".$name." BEFORE DELETE ON".$table." FOR EACH ROW";
        $this->sql .= " BEGIN ";
        $this->sql .= $sql;
        $this->sql .="END// ";
        $this->sql .="DELIMITER ;";
        DB::select($this->sql);
    }


    public static function getInstance()
    {
        if (self::$instanceof === null)
        {
            self::$instanceof = new self();
        }
        return self::$instanceof;
    }
}
