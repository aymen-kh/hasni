// resources/js/app.js
import React from 'react';
import ReactDOM from 'react-dom';
import App from './components/App'; // Import your React component

// Check if the 'app' element exists before rendering React
if (document.getElementById('app')) {
  ReactDOM.render(<App />, document.getElementById('app'));
}
