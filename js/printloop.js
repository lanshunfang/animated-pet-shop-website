//printloop

var obj = $(".printloop>div");
var arr = $.makeArray(obj);
var len = arr.length;
var i = 0;

function printloop() {
    if (i >= len) {
        i = 0;
        $(".printloop>div").css("display", "none");
    };
    arr[i].style.display = "block";
    i++;
}
printloop();

setInterval(printloop, 2000);

