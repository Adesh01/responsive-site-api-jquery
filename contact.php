 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Water Earth Air</title>
       
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Oswald:500,600,700|Roboto+Condensed:700|Raleway" rel="stylesheet">
        <!-- Latest compiled and minified JavaScript -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://use.fontawesome.com/68ee1a6a13.js"></script>

        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <link rel="stylesheet" href="css/styles.css">
    <!-- http://inhabitat.com/7-biggest-threats-to-the-environment-why-we-still-need-earth-day/-->
    </head>
    <?php
        // Connect to Database
        $con = mysqli_connect('fcsdesgncom.ipagemysql.com', 'franco10_ecof1', 'satnam11', 'franco10_ecoform1');

        // initialized variables - before we use them we should create them
        $firstname = '';
        $lastname = '';
        $email = '';
        $comments = '';

        // process form if it was used - posted.
        if (isset($_POST['firstname']))
        {
            // convert our variables from the form
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $comments = $_POST['comments'];

            // validation

            // troubleshoot our connection
            if (mysqli_connect_error())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit;
            }

            // $insert = "INSERT INTO message_storage
            //                 (firstname, lastname, email,comments)
            //                 VALUES
            //                 ('George', 'McFly', 'goerge@me.com', 'George\'s comments')";

            $insert = "INSERT INTO ecoForm1
                            (firstname, lastname, email,comments)
                            VALUES
                            (
                                '" . mysqli_real_escape_string($con, $firstname) . "',
                                '" . mysqli_real_escape_string($con, $lastname) . "',
                                '" . mysqli_real_escape_string($con, $email) . "',
                                '" . mysqli_real_escape_string($con, $comments) . "'
                            )";


            if (!mysqli_query($con, $insert))
            {
                echo("Error description: " . mysqli_error($con));
                exit;
            }
        }
    ?>
    <body>
        <div class="wrapper">
        <header>
          <a class="brand" href="#">Water Earth Air</a>
              <nav class="primary">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li style="width:120px">
                            <a href="#">News</a>
                            <ul data-height="100">
                                <li><a href="news.html">Latest News</a></li>
                                <li><a href="environment.html">Environment</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="links.html">Info</a></li>
                            </ul>
                        </li>
                        <li style="width:180px">
                            <a href="help.php">What You Can Do</a>
                           
                        </li>
                        <li>
                            <a href="#" class="active">Contact</a>
                        </li>

                    </ul>
                </nav>
           </header>
          <div class="row page">
                <div id="slide-content">
                    
                    <img src="img/image4.jpg" width="100%" height="400" style="max-height:430px;" alt="">
                     
                
                     <div class="container">
                            <div class=""><h2 class="water">Let us know about any concerns, suggestions or questions</h2>
                            </div>
                        
                     </div><!-- /.container -->
                </div>
          </div><!--end row hero-->

<!--Newsletter form-->

    
       
        <section id="contact"> 
               <div class="container"> 
                 <div class="row contact-form">
                   
                    <h2>Contact Us</h2>
                      <form action="contact.php" method="post">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Email"> -->
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="comments">Comments</label>
                                <textarea class="form-control" id="comments" rows="4" name="comments" placeholder="Please share your thoughts"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                   
                    
                   </div>
              </div>
        </section>


      <footer>
        <div class="container">
            <div class="col-md-8 col-xs-12">
              <ul class="nav water footer-ul">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="help.html">What You Can Do</a></li>
                         <li><a href="links.html">Resources</a></li>
                        <li class="active"><a href="contact.html">Contact</a></li>
                 </ul><br>
                 <div class="earth"><a href="">Privacy Policy</a><br>
                  &copy;Water Earth Air 2017
                 </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="socials"><i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"> <i class="fa fa-twitter" aria-hidden="true"></i> </i>
                </div>
            </div>
        </div>
       </footer> 
     </div>
        <script src="js/main.js"></script>
           
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

         <script><!--https://github.com/jlmakes/scrollreveal-->

        window.sr = ScrollReveal();
          sr.reveal('.brand', {
            duration:2000,
            origin:'bottom'
          });

          sr.reveal('.showcase-left', {
            duration:2000,
            origin:'left',
            distance:'300px'
          });
           sr.reveal('.showcase-right', {
            duration:2000,
            origin:'top',
            distance:'300px'
          });
           sr.reveal('.showcase-btn', {
            duration:2000,
            delay:1500,
            origin:'bottom'
          });
           sr.reveal('#testimonial div', {
            duration:2000,
            origin:'bottom'
          });
           sr.reveal('.info-left', {
            duration:2000,
            origin:'left',
            viewFactor: 0.2
          });
           sr.reveal('.info-right', {
            duration:2000,
            origin:'right',
            viewFactor: 0.2
          });
         </script> 
           <script> 
                $(function(){
                    /*smooth scrolling*/
                    $('a[href*="#"]:not[href="#"])').click(function() {
                        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                              var target = $(this.hash);
                              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                              if (target.length) {
                                $('html, body').animate({
                                  scrollTop: target.offset().top
                                }, 1000);
                                return false;
                          }
                        }
                    });
                });

             </script> 
    </body>
</html>