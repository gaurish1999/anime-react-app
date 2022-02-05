function checknum(){
    // alert('Working');
    // console.log("Start");

    // var axios = require("axios").default;
    const inputName = document.getElementById('inputName').value;
    const inputMail = document.getElementById('usermail').value;
    const inputCCode = document.getElementById('inputccode').value;
    const inputNum = document.getElementById('inputmobile').value;
// console.log(inputCCode + inputNum)

    var api = {
    method: 'GET',
    url: 'https://veriphone.p.rapidapi.com/verify',
    params: {phone: '+' + inputCCode + inputNum},
    headers: {
        'x-rapidapi-host': 'veriphone.p.rapidapi.com',
        'x-rapidapi-key': '6f1accbbcemsh418f7fad44d7ac4p163939jsn9358f3f4461a'
        }
    };

    axios.request(api)
    .then(response => {
        console.log(response.data);
        // --------------------------------
        document.getElementById('showstatus').innerHTML =  "Hello, " + inputName + 
        " (" + inputMail +  "). <br/>"+ "<span style='color: green; text-transform: Capitalize;'>" + 
        response.data.status + "</span><br/>Carrier: " + response.data.carrier + "<br/>Country: " + 
        response.data.country + "<br/>Country Code: " + response.data.country_prefix + "<br/>Device: " + 
        "<span style='text-transform: Capitalize;'>" + response.data.phone_type + "</span><br/>" + 
        "Your Mobile no. has been successfully verified!";
        // --------------------------------
    })
    .catch(function (error) {
        console.error(error);
    });

    // console.log("End");
}