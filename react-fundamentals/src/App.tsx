import { useState } from 'react';
import { MouseEvent } from 'react';

type OnClickFunc = (event: MouseEvent) => void;

function Button({ count, onClick }: { count: number; onClick: OnClickFunc }) {
  let content = (
    <>
      <button className="btn" onClick={onClick}>
        clicked {count} times
      </button>
    </>
  );

  return <>{content}</>;
}

function App() {
  const [count, setCount] = useState(0);
  function handleClick() {
    setCount(count + 1);
  }

  return (
    <>
      <h1>React</h1>
      <Button count={count} onClick={handleClick} />
      <Button count={count} onClick={handleClick} />
    </>
  );
}

export default App;
