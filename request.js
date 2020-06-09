var bookingForm = $("#reservation"); //form ID here

bookingForm.submit(function(event) {

    event.preventDefault();
    var $form = $(this);


    if ($("#vapeBox").is(":checked")) { //assigns a value to checked checkbox

        $("#vapeBox").val("Yes");

    }


    $.ajax({ // Send ajax request to server
        type: "POST",
        url: "booking.php",
        data: {
            name: $form.find("input[name='name']").val(),
            email: $form.find("input[name='email']").val(),
            phone: $form.find("input[name='phone']").val(),
            date: $form.find("input[name='date']").val(),
            time: $form.find("select[name='time']").val(),
            party: $form.find("select[name='party']").val(),
            vape: $form.find("input[name='vape']").val()
        }

    }).done(function(data) {

        $("#msg").html(data);

        bookingForm[0].reset();

    });

})