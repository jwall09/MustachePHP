/*********************
Name: Jacob Wallace
Coding 07-09
Purpose: JavaScript for use on all pages
**********************/

//Clears all information inputted into the contact form
function clearForm() {
    /*
     * this function replaces the text in text boxes with empty strings
     * and replaces the message area with an html <br>
     */
    $('#fname').val('');
    $('#lname').val('');
    $('#email').val('');
    $('#txtArea').val('');

    $('#msg').html('<br>'); // minor violation of concerns, but okay for now
}

function sendData(fname, lname, email, txtArea) {
    //bring the message area in to report errors or "Sent!"
    let msgArea = document.getElementById("msg");

    $.ajax({
        url: 'processnames',
        type: 'POST',
        data: {fname: fname, lname: lname, email: email, txtArea: txtArea},
        success: function (val) {
            console.log(val);
            if (val === 'okay') {
                clearForm();
                msgArea.innerHTML = "Sent!";
            } else {
                msgArea.innerHTML = "Processing Error";
            }
        },
        error: function () {
            msgArea.innerHTML = "Server Error";
        }
    });

    return;
}
 
function validate() {
    var message = "";

    //bring the message area in to report errors
    let msgArea = document.getElementById("msg");

    //get the strings from the text boxes and trim them
    var fname = $('#fname').val().trim();
    var lname = $('#lname').val().trim();
    var email = $('#email').val().trim();
    var txtArea = $('#txtArea').val().trim();

    //put the trimmed versions back into the form for good iser experience (UX)
    $('#fname').val(fname);
    $('#lname').val(lname);
    $('#email').val(email);
    $('#txtArea').val(txtArea);

    //test the strings from the form and store the error messages
    if (fname === "") {
        message += "First name cannot be empty.<br>";
    }

    if (lname === "") {
        message += "Last name cannot be empty.<br>";
    }

    if (email === "") {
        message += "Email cannot be empty.<br>";
    }

    if (txtArea === "") {
        message += "Leave me some more info, please!.<br>";
    }


    if (message === "") {
        // no errors, so send the data to the server
        console.log("calling ajax");
        sendData(fname, lname, email, txtArea);
    } else {
        // report errors if there are any
        console.log("errors");
        msgArea.innerHTML = message;
    }

    return;
}


/*
 * This is the jQuery docready method. It automatically executes when the DOM
 * is ready. You should always put handlers and other auto-executed code in
 * a docready function. It protects you from "race-conditions" when the JS
 * tries to execute before the DOM is complete.
 */
$(document).ready(function () {

    // event handler for the clear button
    $("#clearBtn").click(function () {
        clearForm();
    });

    // event handler for the send button
    $("#submitBtn").click(function () {
        // only need to call validate. validate will call sendData
        validate();
    });

});