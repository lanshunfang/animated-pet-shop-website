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
