import { ReactNode } from 'react';

import Square from './Square';

type BoardRowArgs = {
  count: number;
  squares: string[];
  handleSquareClick: (index: number) => void;
};

export default function BoardRow(args: BoardRowArgs) {
  const { count, squares, handleSquareClick } = args;

  const row: ReactNode[] = [];

  for (let i = 0; i < count; i++) {
    row.push(
      <Square
        value={squares[i]}
        handleClicks={() => handleSquareClick(i)}
        key={i}
      />
    );
  }

  return <div className="board-row">{row}</div>;
}
