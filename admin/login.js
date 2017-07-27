$('#formLogin').validate({

    rules: {

        username: {
            required: true
          


        },

        password: {
            required: true


        },

       

    },


    messages: {

       



        username: {
            required: 'username or password is empty!',



        },

        password: {
            required: 'username or password is empty!',
         


        },

        



    },

    submitHandler: function() {
        var url = "check.php";
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formLogin").serialize(),
            success: function() {
                alert("login!!"); // get response from servlet and display on page via jQuery 
            }
        });
        return false; // required to block normal submit ajax used
    }
});
