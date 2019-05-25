 <?php
/*-------------------------------------
| Instagram Feed
-------------------------------------*/
$tag = '';

    function instagram(){
      global $tag;
        // Your token is: 325223984.ab103e5.e53a6177b9164693818644b2b85fb9f4
        // Your user ID is: 325223984
        // $result = fetchData("https://api.instagram.com/v1/users/ID-GOES-HERE/media/recent/?access_token=TOKEN-GOES-HERE");
        // https://api.instagram.com/v1/users/3/media/recent/?access_token=ACCESS-TOKEN

      //$accountID = '325223984';
      $accountID = '40454940';
      //$access_token = '325223984.3a81a9f.94eeb6476f5848d7964317b79c1971fd';
      $access_token = '40454940.d75ede8.da40fa4a213c45e8a66a1242dddf69d4';
        // -0 :: Grab ALL of 'em except 1 - weird but true. If you want all you need to use their pagination.
        // $count = ($numImages == 'all') ? '&count=-1':'&count=' . $numImages;
      // for some reason, even if you ask for 100, you will only get a max of 33. You need to use the pagination options to grab more.
      // maybe to avoid an account with one million images?
      $count = 16;

        // $url = "https://api.instagram.com/v1/users/{user-id}/media/recent/?access_token=ACCESS-TOKEN" . $count;
      
      
      $url = "https://api.instagram.com/v1/users/".$accountID."/media/recent/?access_token=".$access_token."&count=".$count;
      // if (isset($_GET['tag'])) 
      // {
      //   $tag = $_GET['tag'];
      //   $url = 'https://api.instagram.com/v1/tags/'.$tag.'?access_token=' . $access_token;
      // }


        // echo $url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        // print_r($result);
        return $result;
    }
?>
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

        <script>
        $(document).ready(function() {
                $('form#clean').on('submit', function(e) {
                  e.preventDefault();

                  var instaInput = $('input#search').val();

                  console.log(instaInput);

                  $('#instagram img').hide();
                  //var searchValue = $('input#search').val();
                  // $('img.nature').show();
                  $('img.' + instaInput).show();


                  //app.addTitle(instaInput);
              });
          });
       /* Instagram = {
                $('input#search').on('submit', function(e) {
                e.preventDefault();

                  var tagName = $('#search').val();
                  Instagram.tagsByName(tagName, function(response) {
                        var $instagram = $('#instagram');
                        $instagram.html('');

                    for (var i = 0; i < response.data.length; i++) {
                        imageUrl = response.data[i].images.low_resolution.url;
                        $instagram.append('<img src="' + imageUrl + '" />');
                      }
                  });
              });
        }
        Instagram.init ({
            client_id: 'd75ede8b74e74fa8a765f80acfb86ad9',
            client_secret: 'c320a861a2f640dfb08794762f0b4139' 
        });*/
        </script>


    <link rel="stylesheet" href="css/styles.css">
    <!-- http://inhabitat.com/7-biggest-threats-to-the-environment-why-we-still-need-earth-day/-->
    </head>
    <body>
      <div class="wrapper">
        <header>
          <a class="brand" href="#">Water Earth Air</a>
              <nav class="primary">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li style="width:120px">
                            <a href="news.html">News</a>
                            <ul data-height="100">
                                <li><a href="news.html">Latest News</a></li>
                                <li><a href="environment.html">Environment</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="links.html">Info</a></li>
                            </ul>
                        </li>
                        <li style="width:180px">
                            <a href="#" class="active">What You Can Do</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
                        </li>

                    </ul>
                </nav>
           </header>
        
        <!-- slideshow -->
          <div class="row hero">
                    <img src="img/image2.jpg">
                     <div class="container">
                            <div class="col2a"><h2 class="water">Want to help your<br>environment?</h2>
                            </div>
                          <div class="col2b">
                            <p class="lead">Bring awareness to your own neighborhood, beaches, peers and woods by volunteering with an organization near you. Help pick up trash, bring awarness to save and cleaning our water on the planet, anywhere, anytime. See how below or get involved by signing up.</p>
                          </div>
                     </div><!-- /.container -->
                </div>
          </div><!--end row hero-->

      <!--Instagram photo search-->
         <div class="black-line">
                <div class="container">
                  <h4 class="insta">Search Instagram for #tagged environment conscious posts and photos in your neighborhood and connect </h4>
                  <form id="clean">
                    <input id="search" name="tag" type="text" value="<?php echo $tag; ?>" style="width:230px;" placeholder="#...">
                  </form>
                   <div id="instagram">
                    <?php
                         
                          $instagram_train = instagram();

                          if (isset($instagram_train->data)) :

                            // expose the array
                            // print_r($instagram_train->data);
                            // exit;

                            foreach ($instagram_train->data as $post) :
                            // print_r($post->images);
                          ?>
                              <img class="
                                insta-img
                                  <?php foreach($post->tags as $thisTag) : echo ' ' . $thisTag; endforeach; ?>
                                "

                                data-low-resolution="<?php echo $post->images->low_resolution->url; ?>"
                                data-thumbnail="<?php echo $post->images->thumbnail->url; ?>"
                                data-standard-resolution="<?php echo $post->images->standard_resolution->url; ?>"
                                src="<?php echo $post->images->standard_resolution->url; ?>"
                                >
                          <?php
                            endforeach;
                          ?>
                          <?php else: ?>
                            <div style="text-align: center;">Instagram Mosaic Error: <?php echo $instagram_train->meta->error_message; ?></div>
                          <?php endif; ?>
                        </div>
                 
                 </div><!-- /.container -->
            </div>

      

<!-- 6issues rollovers -->
        <div class="black-line">
            <div class="container container-part">
                <h1 class="water1">Ways You Can Help the Environment Every Day</h1>
                <section id="gallery"> 
                     <article id="help"> 
                        
                        <div class="graphic">
                          <img src="img/help-plastic.jpg" />
                          <div class="what">Pick up trash</div>
                        </div>
                        <div class="graphic"><img src="img/help-agri.jpg" /><div class="what">Eat Organic</div></div>
                       
                        <div class="graphic"><img src="img/help-solar.jpg" /><div class="what">Go Solar</div></div>
                        <div class="graphic"><img src="img/help-fish2.jpg" /><div class="what">Do Not Fish</div></div>
                        <div class="graphic"><img src="img/help-bicycle.jpg" /><div class="what">Bicycle More</div></div>
                         <div class="graphic"><img src="img/help-plancton.jpg" /><div class="what">Clean The Ocean</div></div>
                          <div class="graphic"><img src="img/help-clean.jpg" /><div class="what">Clean Natural</div></div>
                        <div class="graphic"><img src="img/help-pollu.jpg" /><div class="what">Reduce Consummation</div></div>
                      
                        <div class="graphic"><img src="img/help-food2.jpg" /><div class="what">Be Vegetarian</div></div>
                        <div class="graphic"><img src="img/help-polar.jpg" /><div class="what">Help Animals</div></div>
                     </article>
                </section>
           </div>
        </div>

<!--Volunteer sign up form-->
           <div class="black-line">
                <div class="container">
                    <form id="waterSignup">
                         <h4 class="water4">Sign up to help clean up a beach near you with 'Heal The Bay'</h4>

                            <div id="SignupInner">
                                <div class="form-group">
                                    <input type="text" class="form-control firstname" name="name" placeholder="Name" required>
                                
                                    <input type="email" class="form-control email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                   
                                   <button type="submit" id="submit-volunteer" class="btn btn-danger">SIGN UP</button>
                                </div>
                                <!--<div id="fr-thankyou" class="msgContFr ui-widget ui-corner-all" style="display:none;">
                                    <div class="msgContText"></div>
                                </div>-->
                            </div>
                    </form><!--bootstrap form-->
                </div>
             </div>
      <footer>
        <div class="container">
            <div class="col-xs-12">
                  <ul class="water footer-ul">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#youcan">What You Can Do</a></li>
                        <li><a href="#contact">Contact</a></li>
                  </ul>
              </div>
              <div class="col-md-8 col-xs-6">
                   <div class="earth"><a href="#">Privacy Policy</a><br>
                    &copy;Water Earth Air 2017
                   </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="socials"><i class="fa fa-facebook" aria-hidden="true"></i> <i class="fa fa-instagram" aria-hidden="true"> <i class="fa fa-twitter" aria-hidden="true"></i> </i>
                </div>
            </div>
        </div>
       </footer> 
     </div>
     <script>
      
     </script>
        <!--<script src="js/main.js"></script>-->
           
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    </body>
</html>