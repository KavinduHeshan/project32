<?php

/**
 * Created by PhpStorm.
 * User: Kavindu
 * Date: 9/23/2017
 * Time: 3:48 PM
 */
class db
{
/* public  $user="project";
 public  $pass=" ";
 public  $*/

const  dbname="project";
const  username="root";
const  port="3306";
const host='localhost';
    const password=' ';
    protected $con;
    protected $query;
    protected $results;
    /**
     * db constructor.
     * @param $con
     */
public function __construct()
{


}


    public function setQuery($query)
    {
        $this->con=mysqli_connect("localhost","root","","project","3306")or die("error");
        $this->query = $query;
        $this->results=mysqli_query($this->con,$this->query);
    }


    public function getCon()
    {
        return $this->con;
    }


    public function getResults()
    {
        return $this->results;
}

    /**
     * @return mixed
     */
    public function fetch()
    {
     $a= $this->results;
     return $a->fetch_assoc();
    }


}
/*$passcheck=new db();
$passcheck->setQuery('SELECT password from login  WHERE  Username="aaa"');
//$passcheck->setQuery('INSERT  INTO  login(Username,Password)VALUEs("gfsg","gfg");');
//$passcheck->execute();
$a= $passcheck->getResults();
$b=$a->fetch_assoc();
echo $b["password"];
//echo $row;*/