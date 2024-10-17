import { useState } from 'react';

type SquareArgs = {
  value: string;
  handleClicks: () => void;
};

export default function Square(args: SquareArgs) {
  const { value, handleClicks } = args;

  const [classes, setClasses] = useState('square');
  const [isValueSet, setIsValueSet] = useState(false);

  function handleClick() {
    if (isValueSet) {
      return;
    }

    setIsValueSet(true);
    setClasses((prev) => prev + ' square-clicked');

    handleClicks();

    setTimeout(() => {
      setClasses('square');
    }, 100);
  }

  return (
    <button className={classes} onClick={handleClick}>
      {value}
    </button>
  );
}
