import './App.css'
import Board from './Board';
import { useState } from 'react';

function App(props) {

    const [player, setPlayer] = useState("");
    const [winner, setWinner] = useState("");
    var gameText;

    if (winner !== "") {
        gameText = "Temos um vencedor!!";
    } 
    else if (player !== "") {
        gameText = `Jogador atual: ${player}`;
    }
    else {
        gameText = "Empatou!!";
    }


    return (
        <section className="App">
            <section className="App--title">
                <h1 className="text-center text-uppercase font-weight-bold">Jogo da Velha</h1>
            </section>

            <section className="App--game">
                <div className="App--info">
                    <h1 className="text-center">{gameText}</h1>
                </div>

                <div className="App--board">
                    <Board setPlayer={ setPlayer } setWinner={ setWinner } />
                </div>
            </section>
        </section>
    )
}

export default App;