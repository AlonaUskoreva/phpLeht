var kellekord="pildit/tyhi.png";
var lopp=false;
function klik(pilt) {
    pilt.src = kellekord;
}
function klikValik(pilt){
    kellekord=pilt.src;
    document.getElementById("pilt25").src=kellekord;
}