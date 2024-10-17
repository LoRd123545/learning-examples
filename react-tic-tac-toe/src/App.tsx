import { useState } from 'react';

import Game from './components/Game';

function App() {
  const rowCount = 3,
    columnCount = 3;

  const board: string[] = [];

  const [gameState, setGameState] = useState({
    board: {
      rowCount,
      columnCount,
      board,
    },
    players: {
      first: 'O',
      second: 'X',
    },
  });

  return (
    <>
      <Game gameState={gameState} />
    </>
  );
}

export default App;
