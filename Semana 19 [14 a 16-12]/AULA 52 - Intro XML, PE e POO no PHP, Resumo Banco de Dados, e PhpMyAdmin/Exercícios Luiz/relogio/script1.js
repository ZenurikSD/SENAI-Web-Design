var hora, min,seg;

var relógio = function() {
    var data = new Date();

    hora = data.getHours();
    min  = data.getMinutes();
    seg =  data.getSeconds();

    var time  = hora + ':' + min + ':' + seg;
    window.document.getElementById('time1').innerHTML = time;
}

setInterval( function() {
    relógio(); 
},1000);