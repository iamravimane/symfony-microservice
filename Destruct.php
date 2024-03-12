<?php
class sports {
  public $name;
  public $players;

  function __construct($name, $players) {
    $this->name = $name;
    $this->players = $players;
  }
  
  function __destruct() {
    echo "The  {$this->name} match ends after 90mins of {$this->players} players contest";
  }

  function get_SportName(){
    return $this->name;
  }

  function get_players(){
      return $this->players;
  }
}

$soccer = new sports("Soccer", "22");
echo 'This is the sport of '. $soccer -> get_SportName();
echo  ' played by 2 teams of ' .$soccer -> get_players().' players in total'.'<br>';
?> 