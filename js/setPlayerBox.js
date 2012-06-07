function setPlayerBox(id, src, autoplay, stationName){
    
    player(id, src, autoplay);
    
    $.scrollTo('#header',800);
    
    //document.getElementById("stationName").innerHTML = "<b>" + stationName + "<b/>";
    
}