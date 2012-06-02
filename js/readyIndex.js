$(document).ready(function(){

    if(isMobile()){
        alert("proximamente tendremos una version para mobiles");
    }

    //corners *****
    $("#header").corner("top");	
    $("#footer").corner("bottom");
    $("#menu").corner();
    $("#menu-item").corner();
    $("#stationDay").corner("top");
    $("#lastStation").corner("top");
    $("#warning").corner();

    // $("#footer").dropShadow({left: 1, top: 1, blur: 1, color: "#000"});

    //tabs *******
    $("#tabs li").click(function() {
        //	First remove class "active" from currently active tab
        $("#tabs li").removeClass('active');

        //	Now add class "active" to the selected/clicked tab
        $(this).addClass("active");

        //	Hide all tab content
        $(".tab_content").hide();

        //	Here we get the href value of the selected tab
        var selected_tab = $(this).find("a").attr("href");

        //	Show the selected tab content
        $(selected_tab).fadeIn();

        //	At the end, we add return false so that the click on the link is not executed
        return false;
    });
        
        
    //facebook ****
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

});
