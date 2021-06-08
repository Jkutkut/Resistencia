const TIME2SEE = 5000;

// debug
const debugPlayers = [
    {"pId":1,"name":"jorge","groupPos":null,"pType":0},
    {"pId":2,"name":"paula","groupPos":null,"pType":0},
    {"pId":3,"name":"ana","groupPos":null,"pType":0},
    {"pId":4,"name":"adri","groupPos":null,"pType":1},
    {"pId":5,"name":"laura","groupPos":null,"pType":1},
    {"pId":6,"name":"user23","groupPos":null,"pType":0},
    {"pId":7,"name":"fklsdj","groupPos":null,"pType":0}
]

window.onload = function() {

    getQuerry(); //function from common.js

    $("#submitBtn").click(function() {
        $("#main").css("display", "none");
        $("#characterReveal").css("display", "grid");
    });

    // $.ajax({
    //     url: "players",
    //     method: "get",
    //     success: function(data) {
    //         getMyCharacter(data);
    //     }
    // });
    getMyCharacter(debugPlayers);
}

function getMyCharacter(data) {
    let chunguitos = [];
    let whatAmI = "innocent";
    for (let player of data) {
        console.log(player);
        if (player.name == queryString.username && player.pType == 1) {
            whatAmI = "chunguito";
        }
        else if (player.pType == 1) { // If chunguito found and it is not me
            chunguitos.push(player.name);
        }
    }
    console.log("->" + whatAmI);
    $("#" + whatAmI).css("display", "grid");
    
}