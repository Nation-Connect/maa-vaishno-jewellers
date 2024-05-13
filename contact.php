<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    
    <title>Contact us - Maa Vaishno Jewellers</title>
        <!-- <link rel="shortcut icon" href="assets/logo.png" style="background-color:#666"> -->
        <?php
    include 'head.php';
    ?>
    </head>
<script src="../smtpjs.com/v3/smtp.js"></script>  
<!-- <input type="button" value="Send Email" onclick="sendEmail()"> -->
<script>
function sendEmail() {
    var message= document.getElementById("message").value;
    var name= document.getElementById("name").value;
    var phone= document.getElementById("phone").value;
    var email= document.getElementById("email").value;

     if((name==null)||(name=='')){
        alert("Please enter your name!");
        return;
    }

     if(((phone==null)&&(email==null))||((phone=='')&&(email==''))){
        alert("Please enter your phone or email!");
        return;
    }

    if((message==null)||(message=='')){
        alert("Please add your query or feedback");
        return;
    }
   
    Email.send({
    SecureToken : "329f112689397873b0026bd0d04e73",
    To : '      ',
    From : "      ",
    Subject : "New Contact Us Message!",
    Body : "<html><h2>Contact us Web</h2><strong>"+message+"</strong><br></br><em>Italic</em></html>"
    }).then(
        message => {alert(message);
        document.getElementById("contact-us").style.display='none';

    //     display: block;
    // height: 40vh;
        document.getElementById("contact-thankyou").style.display='flex'
        document.getElementById("contact-thankyou").style.height='40vh';
        document.getElementById("contact-thankyou").style.justify-content='center';
    }
        
    );
}
</script>
<body>
    <div class="container-fluid">
    <?php
    include 'header.php';
    ?>

        <section class="page-heading">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
            <h4>Contact Us</h4>
        </section>

            <section class="container">


            <div class="mapouter" style="width: 100%;"><div class="gmap_canvas" style="width: 100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3561.205620972707!2d84.50414811066528!3d26.801580676616386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39936f4434707533%3A0xd7d5297719368036!2sMAA%20VAISHNO%20JEWELLERS!5e0!3m2!1sen!2sin!4v1715475573968!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>


    </section>

        <section class="container contact"  id="contact-us">
            <div class="row">
                <div class="container text-center content">
                    <h4>Write To Us</h4>
                    <p>Assistance with questions and concerns.</p>
                    <p>Got any questions about what we offer or need a hand? We've got your back! Just leave us a message, and someone from our team will get back to you ASAP. Whether you need info, want to share feedback, or simply want to chat, we're here to assist with anything you need. So, go ahead, reach out to us without any hesitation!
</p>
                </div>
            </div>
            
            <div class="row contact-form justify-content-md-center">
                <form class="col-md-5">
                    <div class="form-group">
                        <input type="text" placeholder="Name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="E-mail" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Contact Number" id="phone" class="form-control" minlength="10" maxlength="10" required>
                    </div>
                    <div class="form-group">
                        <textarea rows="3" class="form-control" id="message" placeholder="Your Message"></textarea>
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-Bhartiya" value="Submit" onclick="sendEmail()">
                    </div>
                </form>
            </div>

           

        </section>

        <section class="container contact" id="contact-thankyou">
            <!-- contact-thankyou -->
         <div class="row hide ">
                <h3>Thank you for getting in touch with us. </br>
                Our representative will get in touch with you shortly.</h3>
            </div>
        </section>
       

        <?php
    include 'footer.php';
    include 'foot.php';
    ?>
    </div>
</body>
</html>