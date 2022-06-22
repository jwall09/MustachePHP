<!-- -------------------
Name: Jacob Wallace
Coding 07-09
Purpose: about page html structure template
------------------- -->

<div class="content">  
    <div class="card">

        <div id="msg">
            <!-- This is a blank area for us to talk to the use -->
            <br>
        </div>        

        <div class="card-image">	
            <h2 class="card-heading">
             Contact Us 
            </h2>
        </div>              
        <form id="email-form" name="email-form" action="../../controllers/Ajax.php" method="POST" >
            <div class="input">
                <input type="text" class="input-field" id="fname" name="fname" maxlength="64"/>
                <label for="input" class="input-label">First Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" id="lname" name="lname" maxlength="64"/>
                <label for="input" class="input-label">Last Name</label>
            </div>
            <div class="input">
                <input type="text" class="input-field" id="email" name="email" maxlength="64"/>
                <label for="input" class="input-label">Email</label>
            </div>
            <div class="input">
                <textarea class="textinput" id="txtArea" name="txtArea" placeholder="Message" rows="10" cols="10"></textarea>
            </div>
            <div class="action">
                <button id="submitBtn" type="button" class="action-button">Send</button>
                <button id="clearBtn" type="button" class="clear-button">Clear</button>
            </div>
        </form>
    </div>
</div>
 

<script src="../../../assets/js/jquery.min.js"></script>
<script src="../../../assets/js/contact.js"></script>
