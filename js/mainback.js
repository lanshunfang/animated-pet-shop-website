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

//the audio navigation
$("li:nth-child(odd)").mouseenter(function() {
    $("#myaudio")[0].play()
});

$("li:nth-child(even)").mouseenter(function() {
    $("#myaudio2")[0].play()
});


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




//jquery ajax validate and submit contact form

$('#formContact').validate({

    rules: {

        contactname: {
            required: true,
            minlength: 3


        },

        contactemail: {
            required: true,
            email: true


        },



        contactadress: {
            required: true,
            minlength: 8


        },

        comments: {
            required: true,
            minlength: 8


        }



    },


    messages: {

        contactemail: {
            required: 'We need your email!',
            email: 'We need realy email!'


        },



        contactname: {
            required: 'Your name is improtant to us!',
            minlength: 'Your name should be at least 3 letters!'


        },

        contactadress: {
            required: 'Your address is improtant to us!',
            minlength: 'Address should has at least 8 letters!'


        },

        comments: {
            required: 'We really care your comments!',
            minlength: 'Comments need at leat 8 letters!'


        }

    },

    submitHandler: function() {
        var url = "./control2.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formContact").serialize(),
            success: function() {
                alert("O yes!!"); // get response from servlet and display on page via jQuery 
            }
        });
        return false; // required to block normal submit ajax used
    }
});




//jquery ajax validate and submit grooming form

$('#formGrooming').validate({

    rules: {

        fname: {
            required: true,
            minlength: 3


        },

        lname: {
            required: true,
            minlength: 2


        },

        city: {
            required: true,
            minlength: 4


        },


        state: {
            required: true,
            minlength: 2


        },


        zip: {
            required: true,
            minlength: 5


        },

        phone_number: {
            required: true,
            minlength: 8


        },

        email: {
            required: true,
            email: true


        },



        address: {
            required: true,
            minlength: 8


        },

    },


    messages: {

        email: {
            required: 'We need your email!',
            email: 'We need realy email!'


        },



        fname: {
            required: 'Your name is improtant to us!',
            minlength: 'Your name should be at least 3 letters!'


        },

        lname: {
            required: 'Your name is improtant to us!',
            minlength: 'Your name should be at least 3 letters!'


        },

        address: {
            required: 'Your address is improtant to us!',
            minlength: 'Address should has at least 8 letters!'


        }



    },

    submitHandler: function() {
        var url = "./control.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formGrooming").serialize(),
            success: function() {
                alert("Submited!!"); // get response from servlet and display on page via jQuery 
            }
        });
        return false; // required to block normal submit ajax used
    }
});
