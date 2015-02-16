<?php

namespace phpe\HTMLTable;
/**
* Class to log what happens.
*
* @package LydiaCore
*/
class CTable {
    /**
    * Properties
    *
    */
    private $tableHeading = null;
    /**
    * Constructor
    *
    */
    public function __construct() {
    }
    /**
   Creates a table based on the recieved array and style with the class name from stylesheet.
    */
    public function getTable($array, $class){

    $html = "<table class='{$class}'>
    <tr class='{$class}'>";

    if($this->tableHeading == null){
        foreach($array as $item){
            foreach($item as $key => $val){
                $html .= "<th class='{$class}'>{$key}</th>";
            }
        break;
    }




    }
    else{
        $html .= $this->tableHeading;
    }

    $html .= "</tr>";

    foreach($array as $item){
        $html .= "<tr class='{$class}'>";
        foreach($item as $value){
            $html .= "<td class='{$class}'>{$value}</td>";
        }
        $html .= "</tr>";
    }

    $html .= "</table>";

    return $html;
    }



     /**
    Sets the table headings if one wish to not use, if the exists, in the array given in the getTable()
    */
    public function setTableHeading($array){

        $this->tableHeading = "";
        foreach($array as $val){
            $this->tableHeading .= "<th>{$val}</th>";
        }

    }
}
