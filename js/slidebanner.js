//slide banner
$("#wrapper-banner > div:gt(0)").hide();

function moveNext() {
    $('#wrapper-banner > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#wrapper-banner');
}
timer = setInterval(moveNext, 4000)

$("#wrapper-banner").mouseover(function() { clearInterval(timer); })

$("#wrapper-banner").mouseout(function() { timer = setInterval(moveNext, 4000); });