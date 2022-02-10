function display(){

    const getInput = document.getElementById('getInput').value;
    
    if(getInput != ''){
    
        // console.log("Start");
        const api = {
        method: "GET",
        url: "https://api.jikan.moe/v3/search/anime?q=" + getInput
        }
    
        axios.request(api)
        .then(response => {
            // console.log(response.data.results[1].start_date);
    
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
            
            document.getElementById('card').innerHTML = '<h2>Search Results: </h2><hr>';
            for(i = 0; i < response.data.results.length; i++)
            {
            document
            .getElementById('card')
            .innerHTML += `<div class='details_searchresults p-4 '>
    
                                <form  action="database.php" method='post' class='form-check' target='_blank'>
    
                                    <div class='row'>
                                        <div class='img_left_side col-md-4'>
                                            <img src='${image[i]}'></img>
                                        </div>
    
                                        <div class='details_right_side col-md-8'>
                                            <div class='form-group'>
                                                <b><label>Title:</label></b>
                                                    <input class='resultinput form-control' type='text' name='title' value='${tit[i]}' readonly> 
                                            </div>
    
                                            <div class='form-group'>
                                                <b><label>Rating:</label></b>
                                                    <input class='resultinput form-control' type='text' name='rating' value='${score[i]}' readonly>/10
                                            </div>
                                                
                                            <div class='form-group'>
                                                <b><label>Episodes:</label></b> 
                                                    <input class='resultinput form-control' type='text' name='episode' value='${episode[i]}' readonly>
                                            </div>
    
                                            <div class='form-group'>
                                                <b><label>Air date:</label></b>
                                                    <input class='resultinput form-control' type='text' name='startdate' value='${start_date[i]}' readonly>
                                            </div>
    
                                            <div class='form-group'>
                                                <b><label>End date:</label></b>
                                                <input class='resultinput form-control' type='text' name='enddate' value='${end_date[i]}' readonly>
                                            </div>
    
                                            <div class='form-group'>
                                                <b><label>Airing:</label></b>
                                                <input class='resultinput form-control' type='text' name='air' value='${air[i]}' readonly>
                                            </div>
    
                                            <button class='btn btn-success w-50'>Save</button>
                                        </div>
                                    </div>
    
                                </form>
    
                            </div>
    
                            <hr>`;
            
            }
        })
        // console.log("End");
    }
    else document.getElementById('card').innerHTML = "<tr><th colSpan='2'>Seriously? -_-</th></tr>";
    
    }