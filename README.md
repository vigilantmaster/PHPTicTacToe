# PHPTicTacToe
TicTacToe Using PHP,


This is a challenge it has been started but not finished. 

index.html includes a form with 3 rows of 3 buttons to represent the tic tac toe cells.
My solution is this:

I have php classes for a Game, Person, GameBoard.
A Game takes a person and a Gameboard as members.

My ideal finished product would be this.
For a Multiplayer Game:
The page starts with a type your name form and this will be used display the current player name.
After the player puts in a name the php code is activated and will search for a game with only one player. <-- this prevents playing against self.
If one is not found a game is created with gameID and waits for a player to join. <-- good time to have a time elapsed counter so user doesn't get impatient
once both players are connected with a gameID the first move goes to the first player to connect.
I am using POST to make the calls to give some security.
each cell has a name and a database holds the cells that are part of the game.
the correct move and win condition are checked in the php code by calling the cells for the game and checking against that. <-- can add a check here to make sure the correct amount of moves are given to each player.
