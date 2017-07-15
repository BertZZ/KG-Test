# KG Tech Test

## Goals

Shuffle the cards - We would like to take the deck that is in sequence and shuffle it so that no two cards are still in sequence.

Deal the cards - We would then like to deal seven cards to each player (one card to the each player, then a second card to each player, and so on).

## Approach

The code is written using object oriented design principles. Each Class has a single responsibility and the code is easy to change due to being object oriented. Each object has its own file in the src directory and an associated suite of Tests in the tests directory.

## Installation
Clone the repository to your local machine and navigate to the project directory.
To run the tests, download PHPUnit from https://phpunit.de/.
Then run ```phpunit tests``` from the root directory of the project and run ```phpunit tests --testdox``` to get a list of the tests in a psudo documentation format
![tests](https://user-images.githubusercontent.com/26028408/28240019-1e93d3e8-6971-11e7-9d43-cd82f70d3df9.png)

## Demo
The program can be run from the comand line using Interactive PHP mode
To deal the cards enter the following commands:
![set up](https://user-images.githubusercontent.com/26028408/28240030-4b1c36f8-6971-11e7-9530-6f99eb033607.png)
Now the cards have been delt, type ```print_r($players)```to see the 7 cards in the hands array of each Player as demonstrated below:

Player 1:![player1hand](https://user-images.githubusercontent.com/26028408/28240037-6cfca05a-6971-11e7-977e-8ac3c45389ca.png)
Player 2: ![player2hand](https://user-images.githubusercontent.com/26028408/28240039-77e60c2c-6971-11e7-82e2-661d696e6cbd.png)
Player 3: ![player3hand](https://user-images.githubusercontent.com/26028408/28240041-802fbe78-6971-11e7-8a13-51b50a1cf8a7.png)
Player 4: ![player4hand](https://user-images.githubusercontent.com/26028408/28240048-89ff24b6-6971-11e7-895b-b08a9f672c9a.png)

