<!-- -------------------
Name: Jacob Wallace
Coding 07-09
Purpose: Ajax controller 
------------------- -->

<?php
class Ajax extends CI_Controller {

    public function processnames() {

        // make sure caller is an ajax request
        if ($this->input->is_ajax_request()){
        
            // validate your data!
            $fname = strip_tags(trim($this->input->post('fname')));
            $lname = strip_tags(trim($this->input->post('lname')));
            $email = strip_tags(trim($this->input->post('email')));
            $txtArea = strip_tags(trim($this->input->post('txtArea')));

            
            // use and/or process your data
            if(!empty($fname) && !empty($lname) && !empty($email) && !empty($txtArea)){
                // output
                echo "okay";

                $to = "jacob.wallace3@g.austincc.edu";
                $subject = "This is a Test"
                $body = "";

                $body .= "From: ".$fname.$lname. "\r\n";
                $body .= "Email: ".$email. "\r\n";
                $body .= "Message: ".$txtxArea. "\r\n";

                mail($to,$subject,$body);

                

            } else {
                // output
                echo "error";
            }
        } else {
            // silence is golden
            echo "";
        }
    }

    /*
     * This is a default method. If you don't use it, stub it to give an empty response
     */
    public function index() {
        // silence is golden
        echo "";
    }
}


    