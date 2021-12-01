import './index.css';
import React from 'react';




/* SQUARE */
function Square(props) {

    return (
    <button 
        className="Board--square btn btn-dark" 
        onClick={ props.onClick }
        onMouseOver={ props.onMouseOver }
        onMouseOut={ props.onMouseOut }
        disabled={ props.disabled }
    >
        {props.value}
    </button>
    )
}


/* BOARD */
class Board extends React.Component {
    constructor (props) {
        super(props);

        this.player_X = "X";
        this.player_O = "O";

        this.state = {
            winner: "",
            currentPlayer: "",
            pieces: new Array(9).fill(null),
            onOverValues: new Array(9).fill(null)
        }

        this.updatePlayer = () => {
            var player;

            /*
             * Checa se alguém venceu. Caso não, então troca de turno, mudando de jogador.
             * Caso alguém tenha vencido, então o jogador é o vencedor.
             */
            if (!this.checkVictory()) {
                player = this.state.currentPlayer === this.player_X ? this.player_O : this.player_X ;
            }
            else {
                player = this.state.winner;

                var clearBoard = this.clearBoard.bind(this);

                window.addEventListener("click", function cleaning() {
                    clearBoard();
                    window.removeEventListener("click", cleaning);
                }, false);
            }

            /*
             * Muda o state. Porém, como o valor do state não é mudado imediatamente,
             * é passado uma funcão que pegará o valor atualizado e mandará.
             */
            this.setState({currentPlayer: player}, function () {
                props.setPlayer(this.state.currentPlayer); 
                props.setWinner(this.state.winner);
            });
        }
    }

    clearBoard() {
        this.forceUpdate(() => {
            this.setState({
                winner: "",
                currentPlayer: "",
                pieces: new Array(9).fill(null),
                onOverValues: new Array(9).fill(null)
            })
        })

        this.updatePlayer();
    }

    checkVictory() {
        const winningPlays = [
            /* linha */
            [0,1,2],
            [3,4,5],
            [6,7,8],
            /* coluna */
            [0,3,6],
            [1,4,7],
            [2,5,8],
            /* diagonal */
            [0,4,8],
            [2,4,6],
        ]

        const ifHasLine = (a, b, c, callable) => {
            if (a && a === b && a === c) {
                callable();
            }
        }

        /* Checa se alguém venceu */
        for (var i=0; i < winningPlays.length; i++) {
            const pieces = this.state.pieces.slice();

            const [a1, b1, c1] = winningPlays[i];
            const [a2, b2, c2] = [pieces[a1], pieces[b1], pieces[c1]];

            ifHasLine(a2, b2, c2, () => {
                this.setState({winner: "this.state.currentPlayer"});
                return (true);
            })
        }

        /* Caso não haja vencedor, ver se o tabuleiro não está cheio */
        if (this.state.pieces.every(element => element != null)) {
            this.setState({winner: ""});
            return (true);
        }

        return (false);
    }
    
    componentDidMount() {
        this.updatePlayer();
    } 

    renderSquare(n) {
        const onClick = () => {
            var new_pieces = this.state.pieces.slice();

            if (!new_pieces[n]) {
                new_pieces[n] = this.state.currentPlayer;

                this.setState({ pieces: new_pieces }, function() {
                    this.updatePlayer();
                });
            }
        }

        const onMouseOver = () => {
            var new_onOverValues = this.state.onOverValues.slice();

            if (!this.state.pieces[n]) {
                new_onOverValues[n] = this.state.currentPlayer;
                this.setState({onOverValues: new_onOverValues});
            }
        }

        const onMouseOut = () => {
            this.setState({onOverValues: new Array(9).fill(null) })
        }

        return <Square 
            key={ n }
            value={ !this.state.onOverValues[n] ? this.state.pieces[n] : this.state.onOverValues[n] } 
            onClick={onClick.bind(this)}
            onMouseOver={onMouseOver.bind(this)}
            onMouseOut={onMouseOut.bind(this)}
            disabled={ this.state.pieces[n] || this.state.winner ? true : false }
            />
    }

    render() {    
        const squares = [];
        
        for (let i=0; i < 9; i++) {
            squares.push(this.renderSquare(i));
        }

        return (
            <div className="Board-container">
                <div className="Board">
                    { squares }
                </div>
            </div>
        )
    }
}


export default Board;