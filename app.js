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
        // console.log(response.data.results);

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

        console.log(
          response.data.results[i].title,
          response.data.results[i].episodes,
          response.data.results[i].score,
          response.data.results[i].start_date,
          response.data.results[i].end_date,
          response.data.results[i].airing,
          response.data.results[i].image_url
          )
        }
        
        document.getElementById('card').innerHTML = '<h2>Search Results: </h2>';
        for(i = 0; i < response.data.results.length; i++)
        {
        document
        .getElementById('card')
        .innerHTML += `
                    <form class='form-check" action="database.php" method='post'>
                        <img src='${image[i]}'></img>

                        <div class='form-group'>
                            <b><label>Title:</label></b>
                                <span name='title'> ${tit[i]}</span>
                        </div>
                            
                        <div class='form-group'>
                            <b><label>Episodes:</label></b> 
                                ${episode[i]}
                        </div>
                            
                        <div class='form-group'>
                            <b><label>Rating:</label></b>
                                ${score[i]}</span>/10
                        </div>

                        <div class='form-group'>
                            <b><label>Air date:</label></b>
                                ${start_date[i]}
                        </div>

                        <div class='form-group'>
                            <b><label>End date:</label></b>
                                ${end_date[i]}
                        </div>

                        <div class='form-group'>
                            <b><label>Airing:</label></b>
                                ${air[i]}
                        </div>

                        <button class='btn btn-success'>Save</button>
                    </form>
                    <hr>
        `;
        
        }
    })
    // console.log("End");
    // -------------------------------------------------------------
//     <tr>
//     <td><img src='${image[i]}'></img></td>
    
//     <td>
//     <form action="database.php" method='post'>
    
//         <b>Title:</b><div name='title'> ${tit[i]}</div><br/>
//         <b>Episodes:</b> ${episode[i]}<br/>
//         <b>Rating:</b> ${score[i]}</span>/10<br/>
//         <b>Air date:</b> ${start_date[i]}<br/>
//         <b>End date:</b> ${end_date[i]}<br/>
//         <b>Airing:</b> ${air[i]}<br/>

//         <button class='btn btn-success'>Save</button>
//     </form>
//     </td>
    
// </tr>
}
else{
    // console.log("Don't make me laugh! Atleast TRY to enter something... -_-");
    document.getElementById('card').innerHTML = "<tr><th colSpan='2'>Seriously? -_-</th></tr>";
}

}