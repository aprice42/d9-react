import React from 'react';
import { render } from 'react-dom';

const Root = () => {
  return (
    <>Hi there, this is coming from React!</>
  )
}

render(<Root/>, document.querySelector('#my-app-target'));
