var board = Chessboard('board', 'start')
var game = new Chess()

function makeMove() {
    var move = document.getElementById('moveInput').value;
    game.move(move);
    board.position(game.fen());
}
