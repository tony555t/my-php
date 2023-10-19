
<?php
require_once "Lable.php";
class Artist extends Lable
{
public string $name;
public int $id;
public int $no_songs; 


public function __construct($name,$id,$no_songs,$name_record_lable)

{
    $this->name=$name;
    $this->id=$id;
    $this->no_songs=$no_songs;
    
}

}

