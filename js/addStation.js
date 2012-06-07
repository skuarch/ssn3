function addStation(f){
  
    $.ajax({
        type: "POST",
        cache: false,
        url: "createStation.php",
        data: {
            station_name: f.station_name.value,
            station_frecuencie : f.station_frecuencie.value,
            station_state : f.station_state.value,
            station_contry : f.station_contry.value,
            station_description : f.station_description.value, 
            station_genre : f.station_genre.value,
            station_acronym : f.station_acronym.value, 
            station_website : f.station_website.value,
            station_keywords : f.station_keywords.value,
            station_realplayer : f.station_realplayer.value,
            station_windowsmedia : f.station_windowsmedia.value,
            station_itunes : f.station_itunes.value,
            station_flash : f.station_flash.value,
            station_winamp : f.station_winamp.value,
            station_player : f.station_player.value,
            station_streaming : f.station_streaming.value
        },
        success: function(data){
            alert(data);
            f.reset();
        },
        error: function(error, quepaso, otroobj){
            //alert(error);
            alert("lo sentimos tu estacion no fue agregada");
        }
    });
    
}