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
