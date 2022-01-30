import axios from 'axios';
import './App.css';

export default function App() {
  function display(){
    const getInput = document.getElementById('getInput').value;
    // const getType = document.getElementById('getType').value;
    if(getInput != ''){

      // console.log("Start");
        const api = {
        method: "GET",
        url: "https://api.jikan.moe/v3/search/anime?q=" + getInput
      }

      axios.request(api)
      .then(response => {
          console.log(response.data.results);

          var tit = new Array();
          var episode = new Array();
          var score = new Array();
          var start_date = new Array();
          var end_date = new Array();
          var air = new Array();
          var image = new Array();
          
          for(var i=0; i<response.data.results.length; i++){
            tit[i] =  response.data.results[i].title;
            episode[i] = response.data.results[i].episodes;
            score[i] = response.data.results[i].score;
            start_date[i] = response.data.results[i].start_date;
            end_date[i] = response.data.results[i].end_date;
            air[i] = response.data.results[i].airing;
            image[i] = response.data.results[i].image_url;

            // console.log(
            //   response.data.results[i].title,
            //   response.data.results[i].episodes,
            //   response.data.results[i].score,
            //   response.data.results[i].start_date,
            //   response.data.results[i].end_date,
            //   response.data.results[i].airing,
            //   response.data.results[i].image_url
            //   )
          }
          
          document.getElementById('card').innerHTML = '<tr><th>Search Results: </th></tr>';
            for(i = 0; i < response.data.results.length; i++)
          {
            document
            .getElementById('card')
            .innerHTML += `
                          <tr>
                              <td><img src='${image[i]}'></img></td>
                              
                              <td>
                              <b>Title:</b> ${tit[i]}<br/>
                              <b>Episodes:</b> ${episode[i]}<br/>
                              <b>Rating:</b> ${score[i]}/10<br/>
                              <b>Air date:</b> ${start_date[i]}<br/>
                              <b>End date:</b> ${end_date[i]}<br/>
                              <b>Airing:</b> ${air[i]}<br/>
                              </td>
                          </tr>
                          
                         `;
          
          }
      })
      // console.log("End");
    }
    else{
      console.log("Don't make laugh! Atleast TRY to enter something... -_-");
      document.getElementById('card').innerHTML = "<tr><th>Don't make laugh! Atleast TRY to enter something... -_-</th><td>";
    }
    
  }

  // To reset the input field, but HTML 5 already provides input type='search'
  // with a clear button, so no need to use this function.
  // function clear(){
  //   console.log("Start");
  //   document.getElementById('getInput').value = '';
  //   console.log("End");
  // }
      
  return (
    
    <div className="App">
      <h2>It's all about anime!</h2>

        <input type='search' id='getInput' placeholder='Search...'/>

        {/* <select id='getType'>
        <option value='Japanese Dub'>Japanese Dub</option>
        <option value='English Sub'>English Sub</option>
        </select> */}

        <button onClick={display}>Search</button>

        <table border='1'>
          <thead>
            
          </thead>

          <tbody id="card">
        
          {/* <label>Title: </label><p id="here1"></p>
          <label>No. of Episodes: </label><p id="here2"></p>
          <label>Rating: </label><p id="here3"></p>
          <label>Air date: </label><p id="here4"></p> */}
       
          </tbody>
        </table>
      
    </div>
  );
}