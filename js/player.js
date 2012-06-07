function player(id, src, autoplay){
    
    var obj = "<object id='' width='' heigth='' classid='' standby='' type=''> ";
    obj += "<param name='filename' VALUE='"+ src +"'>";
    obj += "<param name='ShowControls' VALUE='true'>";
    obj += "<param name='ShowStatusBar' value='true'>";
    obj += "<param name='ShowDisplay' VALUE='false'>";   
    
    if(autoplay){
        obj += "<param name='autostart' VALUE='true'>";
        obj += "<embed TYPE='application/x-mplayer2' SRC='"+src+"' NAME='MediaPlayer' WIDTH='300' HEIGHT='50' ShowControls='1' ShowStatusBar='1' ShowDisplay='0' autostart='1' />";
    } else {
        obj += "<param name='autostart' VALUE='false'>";
        obj += "<embed TYPE='application/x-mplayer2' SRC='"+src+"' NAME='MediaPlayer' WIDTH='300' HEIGHT='50' ShowControls='1' ShowStatusBar='1' ShowDisplay='0' autostart='0' />";        
    }   
    
    obj += "</object>";
    
    document.getElementById(id).innerHTML = obj;
   
}

