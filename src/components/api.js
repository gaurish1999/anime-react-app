import axios from 'axios';
import Result from './resultBody.js';

export default function display(){
    const api = {
        method: "GET",
        url: "https://api.jikan.moe/v3/search/anime?q=naruto"
    }

    axios.request(api)
    .then(response => {
        // console.log(response.data.results);
        // <Result/>
        document.getElementById('here').innerHTML = response.data.results.title;
    })
}