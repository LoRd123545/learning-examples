import Board from './Board';

export type GameState = {
  board: {
    rowCount: number;
    columnCount: number;
    board: string[];
  };
  players: {
    first: string;
    second: string;
  };
};

export default function Game({ gameState }: { gameState: GameState }) {
  return <Board gameState={gameState} />;
}
