$(function(){
    $("#aboutimg").mouseenter(function() {
        $("#aboutimg").attr("src", "image/webpage1/1-1-bright.png");
    });
    $("#aboutimg").mouseout(function() {
        $("#aboutimg").attr("src", "image/webpage1/1-1.png");
    });
    $("#projectimg").mouseenter(function() {
        $("#projectimg").attr("src", "image/webpage1/1-2-bright.png");
    });
    $("#projectimg").mouseout(function() {
        $("#projectimg").attr("src", "image/webpage1/1-2.png");
    });
    $("#resumeimg").mouseenter(function() {
        $("#resumeimg").attr("src", "image/webpage1/1-3-bright.png");
    });
    $("#resumeimg").mouseout(function() {
        $("#resumeimg").attr("src", "image/webpage1/1-3.png");
    });
    $("#contactimg").mouseenter(function() {
        $("#contactimg").attr("src", "image/webpage1/1-4-bright.png");
    });
    $("#contactimg").mouseout(function() {
        $("#contactimg").attr("src", "image/webpage1/1-4.png");
    });
   
    $("#aboutword").mouseenter(function() {
        $("#aboutword").attr("src", "image/webpage22a/2-1-bright-01.png");
    })
    $("#aboutword").mouseout(function() {
        $("#aboutword").attr("src", "image/webpage22a/2A-1-01.png");
    })
    window.on = true;
});

function switchpage() {
    switch(window.on) {
        case true:
            $("#about").css("background-image", "url(image/webpage22b/2B-01.jpg)");
            $("#aboutlink").attr("src", "image/webpage22b/2B-4-01.png");
            window.on = false;
            break;
        case false:
            $("#about").css("background-image", "url(image/webpage22a/2A-01.jpg)");
            $("#aboutlink").attr("src", "image/webpage22a/2A-2-01.png");
            window.on = true;
            break;
    }
}

function goto(pos) {
    switch(pos) {
        case 0:
            window.location = "#about";
            break;
        case 1:
            window.location = "#project";
            break;
        case 2:
            window.location = "#resume";
            break;
        case 3:
            window.location = "#contact";
            break;
    }
    
}

function openResume() {
    window.location = "#resume";
    $("#myModal").modal("show");
}

function ThankYouDialog() {
    confirm("Thank you!");
}