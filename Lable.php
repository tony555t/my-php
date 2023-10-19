<?php


class Record_lable{
    public string $name_recode_label;
    public int $id;
    public int $no_artists;
    private  int $finaial_status;



public function __construct($name_recode_label,$id,$no_artists)
{
    $this->name_recode_label=$name_recode_label;
    $this->id=$id;
    $this->$no_artists;

} 
public function setFinacial_status($finaial_status){
    $this->finaial_status= $finaial_status ;
}
public function getFinacial_status()
{
  return $this->finacial_status;
}
}