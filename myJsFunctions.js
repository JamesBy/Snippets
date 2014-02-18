$(document).ready(function() {
    $('#slider').carousel({
        interval: 10000
    });
    $('#maqP').marquee('dvHead3');
});

function showHidePanel(whichOne) {
    var amountOfPanels = 8;
    var onaMob = false;
    if ($(window).width() <= 760) {//mobile
        onaMob = true;
    }
    var showLHS = false;
    var offSet = $('#LHS').height() + $('#intro').height() + 40;
    var midScreen = (($(window).width() / 2) - ((($(window).width() / 6) * 4) / 2));
    if (!$('#car' + whichOne).is(":visible")) {
        $('#panel' + whichOne).load("application/view/panels/panel" + whichOne + ".php", function() {
            if (($('#RHS').attr('class') === 'col-sm-6') && (!onaMob)) {
                $("#LHS").animate({
                    left: "+=" + midScreen
                }, 2000);

                $("#RHS").animate({
                    top: "+=600",
                    left: "-=" + midScreen
                }, 2000, function() {
                    $('#RHS').css({"top": "-=600", "left": "+=" + midScreen});
                    $('#LHS').css({"left": "-=" + midScreen});
                    $('#RHS').css('top', 'auto').css('left', 'auto');
                    $('#RHS').attr('class', 'col-md-8 col-xs-12 col-centered');
                    $('#LHS').attr('class', 'col-md-8 col-xs-12 col-centered');
                });

                $('#panel' + whichOne).slideToggle("slow", function() {
                    $('#car' + whichOne).carousel({
                        interval: 8000
                    });
                    var top = $('#panel' + whichOne).position().top;
                    $('html, body').animate({scrollTop: ($('#panel' + whichOne).position().top + offSet)}, 2000);
                });
            } else {//open a new panel
                $('#panel' + whichOne).slideToggle("slow", function() {
                    $('html, body').animate({scrollTop: ($('#panel' + whichOne).position().top + offSet + 40)}, 1000);
                    $('#car' + whichOne).carousel({
                        interval: 8000
                    });

                });
            }
        });
    } else {//Close the panel

        $('#panel' + whichOne).slideToggle("slow", function() {

            for (i = 1; i <= amountOfPanels; i++) {
                if ($('#car' + i).is(":visible")) {
                    showLHS = false;
                    break;
                } else {
                    showLHS = true;
                }
            }
            if (showLHS) {
                $('html, body').animate({scrollTop: 0}, 2000);
                if (!onaMob) {
                    $("#RHS").animate({
                        top: "-=" + $('#LHS').height(),
                        left: "+=" + 350
                    }, 1000, function() {
                        $('#RHS').css('top', 'auto').css('left', 'auto');
                        $('#mainRow').attr('class', 'row');
                        $('#LHS').attr('class', 'col-sm-6');
                        $('#RHS').attr('class', 'col-sm-6');
                    });
                }
            }
        });
    }
}


//jQuery.fn.center = function() {
//    this.css("position", "absolute");
//    this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) +
//            $(window).scrollTop()) + "px");
//    this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) +
//            $(window).scrollLeft()) + "px");
//    return this;
//};

/*
 function showHidePanel(whichOne) {
 var amountOfPanels = 8;
 var showLHS = false;
 if (!$('#car' + whichOne).is(":visible")) {
 //open appropriate panel
 //dynamic load
 $('#panel' + whichOne).load("application/view/panels/panel" + whichOne + ".php", function() {
 //event.preventDefault(); 
 if ($('#LHS').is(":visible")) {
 $("#LHS").empty();//empty the left div but leave the div so it can be '.load' ed later
 
 $('#RHS').attr('class', 'col-md-8 col-xs-12 col-centered');
 $('#panel' + whichOne).slideToggle("slow",function(){
 $('#car'+whichOne).carousel({
 interval: 8000
 });
 });
 //return false;
 //event.preventDefault();
 
 //});
 } else {
 $('#panel' + whichOne).slideToggle("slow",function(){
 $('#car'+whichOne).carousel({
 interval: 8000
 });
 });
 }
 });
 } else {
 
 $('#panel' + whichOne).slideToggle("slow", function() {
 
 for (i = 1; i <= amountOfPanels; i++) {
 if ($('#car' + i).is(":visible")) {
 
 showLHS = false;
 //console.log('vizible: '+showLHS);
 break;
 
 } else {
 showLHS = true;
 //console.log('not vizible: '+showLHS);
 
 }
 }
 if (showLHS) {
 
 $('#LHS').load("application/view/carousel.php", function() {
 $('#RHS').attr('class', 'col-sm-6');
 $('#slider').carousel({
 interval: 8000
 });
 });
 }
 
 
 
 });
 }
 
 
 }*/