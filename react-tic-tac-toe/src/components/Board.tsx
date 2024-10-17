import { useState, ReactNode } from 'react';

import BoardRow from './BoardRow';

import { GameState } from './Game';

export default function Board({ gameState }: { gameState: GameState }) {
  const { board, players } = gameState;

  const { columnCount, rowCount } = board;
  const { first: firstValue, second: secondValue } = players;

  const [clickCount, setClickCount] = useState(0);
  const [squares, setSquares] = useState<string[]>(board.board);

  function handleSquareClick(index: number) {
    const value = clickCount % 2 == 0 ? firstValue : secondValue;

    setSquares((prev) => {
      const newSquares = [...prev];

      newSquares[index] = value;

      return newSquares;
    });

    setClickCount((prev) => prev + 1);
  }

  const rows: ReactNode[] = [];

  for (let i = 0; i < rowCount; i++) {
    const start = i * columnCount;
    const end = start + columnCount;
    const rowSquares = squares.slice(start, end);

    rows.push(
      <BoardRow
        count={columnCount}
        squares={rowSquares}
        handleSquareClick={(index) => handleSquareClick(start + index)}
        key={i}
      />
    );
  }

  return <div className="board">{rows}</div>;
}
