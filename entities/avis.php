<?PHP
class Avis{
	private $num;
	private $id_user;
	private $jour;
	private $sujet;
	private $commentaire;
	private $rating;
	function __construct($num,$id_user,$jour,$sujet,$commentaire,$rating)
	{
		$this->num=$num;
		$this->id_user=$id_user;
		$this->jour=$jour;
		$this->sujet=$sujet;
		$this->commentaire=$commentaire;
		$this->rating=$rating;
	}
	
	function getnum(){
		return $this->num;
	}
	function getid_user(){
		return $this->id_user;
	}
	function getjour(){
		return $this->jour;
	}
	function getsujet(){
		return $this->sujet;
	}
	function getcommentaire()
	{
		return $this->commentaire;
	}
	function getRating(){
		return $this->rating;
	}
}
