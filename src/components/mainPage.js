import React from 'react';
import Api from './api.js';

export default function mainPage() {
  return <div>
      <h2>It's all about anime!</h2>

        <input type='text' placeholder='Search anime'></input>

        <select>
        <option value='Japanese Dub'>Japanese Dub</option>
        <option value='English Sub'>English Sub</option>
        </select>

        <button onClick={Api}>Search</button>
  </div>;
}
