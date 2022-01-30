import React from 'react';
import Api from './api.js';

export default function resultBody() {
  return <div>
      <div id="here">
          <img src=''></img>
          <h2>${Api.response.data.results.title}</h2>
      </div>
  </div>;
}
