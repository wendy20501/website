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
    $("#aboutpeople_b").hide();
    
    
    $("#aboutandroid").mouseenter(function() {
        $("#aboutandroid").attr("src", "image/webpage22b/2B-1-BRIGHT-01.png");
    });
    $("#aboutandroid").mouseout(function() {
        $("#aboutandroid").attr("src", "image/webpage22b/2B-1-01.png");
    });
    $("#aboutweb").mouseenter(function() {
        $("#aboutweb").attr("src", "image/webpage22b/2B-2-BRIGHT-01.png");
    });
    $("#aboutweb").mouseout(function() {
        $("#aboutweb").attr("src", "image/webpage22b/2B-2-01.png");
    });
    $("#aboutsw").mouseenter(function() {
        $("#aboutsw").attr("src", "image/webpage22b/2B-3-BRIGHT-01.png");
    });
    $("#aboutsw").mouseout(function() {
        $("#aboutsw").attr("src", "image/webpage22b/2B-3-01.png");
    });
    
});

function switchpage() {
    switch(window.on) {
        case true:
            $("#aboutbg").attr("src", "image/webpage22b/2B-01.jpg");
            $("#aboutpeople_a").hide();
            $("#aboutword").hide();
            $("#aboutpeople_b").show();
            $("#aboutandroid").show();
            $("#aboutweb").show();
            $("#aboutsw").show();
            window.on = false;
            break;
        case false:
            $("#aboutbg").attr("src", "image/webpage22a/2A-01.jpg");
            $("#aboutpeople_a").show();
            $("#aboutword").show();
            $("#aboutpeople_b").hide();
            $("#aboutandroid").hide();
            $("#aboutweb").hide();
            $("#aboutsw").hide();
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