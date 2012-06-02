function player(id, src){
    
    var obj = "<object id='' width='' heigth='' classid='' standby='' type=''> ";
    obj += "<param name='filename' VALUE='"+ src +"'>";
    obj += "<param name='ShowControls' VALUE='true'>";
    obj += "<param name='ShowStatusBar' value='true'>";
    obj += "<param name='ShowDisplay' VALUE='false'>";
    obj += "<param name='autostart' VALUE='false'>";
    obj += "<embed TYPE='application/x-mplayer2' SRC='"+src+"' NAME='MediaPlayer' WIDTH='326' HEIGHT='65' ShowControls='1' ShowStatusBar='1' ShowDisplay='0' autostart='0' />";
    obj += "</object>";
    
    document.getElementById(id).innerHTML = obj;
    
}

