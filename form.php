<!-- <div> 
    <form action="send" method="post" role="form" class="contactForm">
        <div id="sendmessage">
            Your message has been sent. Thank you!
        </div>
        <div id="errormessage"></div>
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="button button-a button-big button-rouded">
                    отправить
                </button>
            </div>
        </div>
    </form>
 </div> -->












<form action="send.php" method="post">
    First Name: <input type="text" name="first_name"><br>
    Last Name: <input type="text" name="last_name"><br>
    Email: <input type="text" name="email"><br>
    Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>