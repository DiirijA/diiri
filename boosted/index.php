<html lang="eng>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contus</title>
    <link rel="stylesheet" href="us.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --> -->
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <div class="container-fluid"> 
            <a class="navbar-brand " href="#" >DIIRI JAMES AMUNONI</a> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="n<!DOCTYPE html>avbar-toggler-icon"></span>
        </button>
       
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
            <ul class="navbar-nav  ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" >What you will learn</a></li>
                  <li>
                    <a href="#" class="nav-link">Qustions</a>
                  </li>
                  <li>
                    <a href="#" class="nav-link">Instractors</a>
                  </li>
                  <li>
                    <a href="potf1.html" class="nav-link">Home</a>
                  </li>    
                    
</ul>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <div class="container bg-dark">
        <form  action="insert.php" method="POST">
            <h3>GET IN TOUCH</h3>
            <input name="name" type="text" id="name" placeholder="your name" required>
            <input name="email" type="email" id="email" placeholder="Email id" required>
            <textarea name="message" id="message"  rows="4"placeholder="How can we help you?"></textarea> 
            <input name="phone" type="text" id="phone" placeholder="phone no." required>
            
            <button type="submit ">Send</button>
        </form>
    </div>
    <script scr="https://smtpjs.com/v3/smtp.js"></script>
    <script>
    function sendEmail(){
      Email.send({
    Host : "smtp.gmail.com",
    Username : "diiriamunoni@gmail.com",
    Password : "340AAC11FD5C692BD46C2D3DD016E2A3AC",
    To : 'amunonijames@gmail.com',
    From : document.getElementById("email").value,
    Subject : "This is the subject",
    Body :  "Name: " + document.getElementById("name").value
     + " <br> Email: " + document.getElementById("email").value
     + " <br> Phone no: " + document.getElementById("phone").value
     + " <br> Message: " + document.getElementById("message").value
            }).then(
  message => alert("message sent")
);
    }
    </script>
    
    
    

    <!-- <script>
function sendEmail(){
   
//   Email.send({
//      Host : "smtp.gmail.com",
//      Username : "diiriamunoni@gmail.com",
//      Password : "BE03A8B23C8DDBD9D250F238C87894E3001A",
//      To : "amunonijames@gmail.com",
//      From : document.getElementById("email").value,
//      Subject : "enquiry",
Email.send({
    SecureToken : "C973D7AD-F097-4B95-91F4-40ABC5567812",
    To : 'them@website.com',
    From : "you@isp.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
     Body : "Name: " + document.getElementById("name").value
     + " <br> Email: " + document.getElementById("email").value
     + " <br> Phone no: " + document.getElementById("phone").value
     + " <br> Message: " + document.getElementById("message").value

 }).then(
   message => alert("Message sent thank you")
 );


 }

    </script> -->
</body>
</html>





?>