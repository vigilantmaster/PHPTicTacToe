
<html>
<body>


<?php
/*
$move = 0;
//class player
class player {
	//Properties
	# playerName
	public $playerName;
	# markType (X or O )
	public $markType;
	//Methods
}
//class board
class board {
	//Properties
	# array of spaces and fill with 0 for empty ( 1 for player 1 and 2 for player 2)
	public $board_spaces = array_fill(0,9,0);
	//Methods
	# check if valid move
	function CheckMove($move = 0){
		//check if the space has not been used yet
		return $board_spaces[$move] == 0;
	}
	# add move to array of spaces
	# check for win
		# check each row
		# check each col
}

//class tictactoe
class tictactoe {
	//Properties
	# Current Game ID
	public $gameID;
	# Array of players
	public $Players_array = array("PlayerOne","PlayerTwo");
	#CurrentPlayerid
	public $CurrentPlayerName = 0 ;
	# playing board
	
	//Methods	
	#getPlayer
	function getCurrentPlayer(){
		return $Players_array[$CurrentPlayerName];
	}
	#Check Player move 
	// check if the player is currently the one who can move
	// check if the position is available
	// if position is available and position is available then 
	// Check Win Condition
	function set_gameID($gameID){
		$this->gameID = $gameID;
	}
	
}*/
# check for which button was pressed
	if(array_key_exists('button0', $_POST)){
	buttonPressed("button0");
	}
	
	function buttonPressed($buttonName){
		echo $buttonName. " was pressed";
	}

		
?>

</body>
</html>