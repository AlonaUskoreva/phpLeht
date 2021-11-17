function kaed(){
    var t=document.getElementById("tahvel2").getContext("2d")

    t.fillStyle="black";
    t.fillRect(80,50,30,45)

    t.fillStyle="black";
    t.fillRect(160,50,30,45)

}

function silmad(){
    var t=document.getElementById("tahvel2").getContext("2d")

    t.fillStyle="black";
    t.fillRect(150,33,6,7)

    t.fillStyle="black";
    t.fillRect(113,33,6,7)

}


function kustuta2(){
    var t=document.getElementById("tahvel2").getContext("2d")
    t.clearRect(0, 0, 500, 500);
}


function pea(){
    var t=document.getElementById("tahvel2").getContext("2d");
    t.beginPath();
    t.fillStyle="white"
    t.fillRect(110,30, 50, 20);


}



function keha(){
    var t=document.getElementById("tahvel2").getContext("2d");
    t.beginPath();
    t.fillStyle="white";
    t.fillRect(105,50,60,50)



}

function jalad(){
    var t=document.getElementById("tahvel2").getContext("2d");
    var laius=document.getElementById("laius").value;
    var laius=document.getElementById("korgus").value;

    t.fillStyle="black";
    t.fillRect(100,98,30,70);

    //t.fillStyle="black";
    //t.fillRect(120,98,30,70);

    t.fillStyle="black";
    t.fillRect(140,98,30,70);


}