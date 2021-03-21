<?php
class Items{

	private $id;
    private $itemname;
    private $image;
	private $price;
	private $quantity;
	private $description;

    function __construct($id,$itemname,$image,$price,$quantity,$description){
        $this->id=$id;
        $this->itemname=$itemname;
        $this->image=$image;
        $this->price=$price;
        $this->quantity=$quantity;
        $this->description=$description;
    }

    function getId(){
		return $this->id;
	}
    function getItemname(){
		return $this->itemname;
	}
    function getImage(){
		return $this->image;
	}
    function getPrice(){
		return $this->price;
	}
    function getQuantity(){
		return $this->quantity;
	}
    function getDescription(){
		return $this->description;
	}


    function setId($id){
		$this->id=$id;
	}
    function setItemname($itemname){
		$this->itemname=$itemname;
	}
    function setImage($image){
		$this->image=$image;
	}
    function setPrice($price){
		$this->price=$price;
	}
    function setQuantity($quantity){
		$this->quantity=$quantity;
	}
    function setDescription($description){
		$this->description=$description;
	}

}


?>