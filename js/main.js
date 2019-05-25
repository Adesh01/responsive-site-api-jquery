$(document).ready(function(){
   /* $('#button-more').hide();
    $('#loading-div').show();

    $('#button-more').show();
    $('#loading-div').hide();
    $(response).appendTo($(container));
    page += 1;


    $.each(response.items, function(index, value) {
      $("<div />", {
        "class" : "media",
        "text" : value
      });
    });*/

    /*navbar dropdown */
    
    $('nav.primary .fa-bars').click(function(){
          $('nav.primary').toggleClass('open');
                    // var theHeight = $('nav.primary > ul').height();
                    // $('nav.primary').height(theHeight);
    });
    if ($(window).width() < 980) {
           console.log('testB');
            $('nav.primary > ul > li').mouseover(function () {
                  var theUL = $(this).find('ul');
                  theUL.css({ 'height': 'auto' });
                 //theUL.addClass('open');
              });

              $('nav.primary > ul > li').mouseout(function () {
                  var theUL = $(this).find('ul');
                  theUL.addClass('open');
                  theUL.css({ 'height': 'auto' });
              });
              console.log('test12b');

         }
          else {
                 $('nav.primary > ul > li').mouseover(function(){
                    var theUL = $(this).find('ul');
                    var theHeight = theUL.attr('data-height');
                    theUL.css({'height':theHeight});
                    theUL.addClass('open');
                });
                $('nav.primary > ul > li').mouseout(function(){
                    var theUL = $(this).find('ul');
                    theUL.css({'height':0});
                    theUL.removeClass('open');
                });
            }

  window.onresize = function () {
             console.log('testA');
        if ($(window).width() < 980) {
               console.log('testB');
               $('nav.primary > ul > li').mouseover(function () {
                          var theUL = $(this).find('ul');
                          theUL.css({ 'height': 'auto' });
                         //theUL.addClass('open');
                      });

                      $('nav.primary > ul > li').mouseout(function () {
                          var theUL = $(this).find('ul');
                          theUL.addClass('open');
                          theUL.css({ 'height': 'auto' });
                      });
                      console.log('test12b');

       }
        else {
               $('nav.primary > ul > li').mouseover(function(){
                  var theUL = $(this).find('ul');
                  var theHeight = theUL.attr('data-height');
                  theUL.css({'height':theHeight});
                  theUL.addClass('open');
              });
              $('nav.primary > ul > li').mouseout(function(){
                  var theUL = $(this).find('ul');
                  theUL.css({'height':0});
                  theUL.removeClass('open');
              });
          }
   };


   $('nav.primary > ul > li').mouseover(function(){
        
        var theWidth = $(window).width();
        if (theWidth < 980)
        {   
            var theUL = $(this).find('ul');
            theUL.css({ 'height': 'auto' });
        }
        else
        {   var theUL = $(this).find('ul');
            var theHeight = theUL.attr('data-height');
            theUL.css({'height':theHeight});
            theUL.removeClass('open');
        }
        
    });

    $('nav.primary > ul > li').mouseout(function(){
        var theUL = $(this).find('ul');
        var theWidth = $(window).width();
        if (theWidth < 980)
        { 
            var theUL = $(this).find('ul');
            theUL.removeClass('open');
            theUL.css({ 'height': '0' });
        }
        else
        {   var theUL = $(this).find('ul');
            theUL.css({'height':0});
            theUL.removeClass('open');
            
        }
    });


/*______SLIDESHOW_______ */
    /*| is it animating?*/
    var state = 'static';
    
    function slide_left() {
        if (state == 'static')
        {
            state = 'animating';
            $('#slide-content .slides .slide:eq(1)').animate({'left':'0px'}, 1000);
            $('#slide-content .slides .slide:eq(0)').animate({'left':'-100%'}, 1000, slide_left_append);
        }
    }    
    function slide_left_append() {
        $('#slide-content .slides .slide:eq(0)').css({'left':'100%'}).appendTo('#slide-content .slides');
        state = 'static';
    }
    $('#slide-content .cntrls .right img').click(slide_left);


    function slide_right() {
        if (state == 'static')
        {
            state = 'animating';
            $('#slide-content .slides .slide:last').css({'left':'-100%'}).animate({'left':'0px'}, 1000);
            $('#slide-content .slides .slide:eq(0)').animate({'left':'100%'}, 1000, slide_right_append);
        }
    }    
    function slide_right_append() {
        $('#slide-content .slides .slide:last').prependTo('#slide-content .slides');
        state = 'static';
    }

    $('#slide-content .cntrls .left img').click(slide_right);


    /** rollover HOMEpage **/

        function img_up() {

            var howHigh = $(this).outerHeight();
                console.log(howHigh);
             var desc = $(this).find('.desc');
             var h3 = $(this).find('h3.title-main');
             
             h3.stop().animate({'opacity':'0'}, 500);
             desc.stop().animate({'height':howHigh}, 500);
         }
         function img_down() {
           
             var desc = $(this).find('.desc');
             var h3 = $(this).find('h3.title-main');
             
             h3.stop().animate({'opacity':'1'}, 500);
             desc.stop().animate({'height':'0px'}, 1000);
         }
          $('.issue').mouseover(img_up);
          $('.issue').mouseout(img_down);



 /* Zoom in image */
function lightMeUp() {
    if ($(window).width() >= 700)
    {
        //do the lightbox
    }
}
           

       // $('#help .graphic').hover(mouseover, mouseout);
       $('#help .graphic').hover(
            function() {
                // $(this).css("cursor","pointer");
                $(this).addClass('expanded');
            }, 
            function() {
                // $(this).css("cursor","pointer");
                $(this).removeClass('expanded');
            }

       );

/*** INFOGRAPHICS LIGHTBOX ****/
function light_on() 
      {
        var theSrc = $(this).attr('src');
        $('#lb .light img').attr('src', theSrc);

        var theText = $(this).attr('data-text');
        $('#lb .light .text').html(theText);

        $('#lb').show();
      }

      function light_off() 
      {
        $('#lb').hide();
      }

      /*-------------------------------------
      | Event Listeners
      -------------------------------------*/
      $('.infogr img').click(light_on);
      $('#lb .light .close').click(light_off);
      $('#lb').click(light_off);



/* weather API */
  var url = 'http://api.openweathermap.org/data/2.5/weather?zip=%ZIPCODE%&APPID=6f181e7b8887bcb10a67c2bb33487822&units=imperial';
  
  $('input#getWeather').click(function() {
          var zipCode = $('input#zipCode').val();

          if (isNaN(zipCode) || zipCode.length !== 5) {
            alert('hey that\'s not a valid City or Zip Code');
            return;
        }

        var parsedUrl = url.replace('%ZIPCODE%', zipCode); 
          //console.log(parsedUrl);
          
        $.get(parsedUrl, function(data, status){
          console.log(data)
          $('h3.result').append(data.name +'\'s temperature is ' + data.main.temp + ' with ' + data.weather[0].description +'.'); //added fs
          if (data.main.temp >= 50) {
            $('.weather').addClass('warm');
          } else if (data.main.temp < 50) {
            $('.weather').addClass('cool');
          }
        });

/* environment :
lightbox on desktop only;
on mobile go to a new page <a href>;
js on resize >500px {
  e.preventDefault;
  do the light box thing instead here
}
*/
 
}); /*doc ready*/


/* Instagram API pull images 

    Instagram = {
      
          config: {},

          BASE_URL: 'https://api.instagram.com/v1',

          init: function( opt) {
              opt = opt || {};

              this.config.client_id = opt.client_id;
              this.config.client_secret = opt.client_secret;//new FS
          },

           /* get a list of popular images 
          popular: function(callback) {
              var endpoint = this.BASE_URL + 'media/popular?&client_id=' +this.config.client_id + '&client_secret=' +this.config.client_secret;
              this.getJSON( endpoint, callback );
           
          },

          /* get a list of recentlytagged images 
          tagsByName: function( name ) {
              var endpoint = this.BASE_URL + '/tags/' + name + '/media/recent?&client_id=' + this.config.client_id+ '&client_secret=' +this.config.client_secret; 
              this.getJSON( endpoint, callback );
            },

      
            getJSON: function( url, callback ) {
              $.ajax({
                  type: 'GET',
                  url: url,
                  crossDomain: true,
                  dataType:'jsonp',
                  success: function(response) {
                      if (typeof callback === 'function' ) callback(response);
                  }
              });
         }
    };

  Instagram.init ({
      client_id: 'd75ede8b74e74fa8a765f80acfb86ad9',
      client_secret: 'c320a861a2f640dfb08794762f0b4139' //new FS
    });
  

$(document).ready(function(){

      Instagram.popular(function(response) {
          var $instagram = $('#instagram');
          for (var i = 0; i < response.data.length; i++) {
            imageUrl = response.data[i].images.low_resolution.url;
            $instagram.append('<img src="' + imageUrl + '" />');
          }
      });

      $('form#clean').on('submit', function(e) {
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
      /* https://www.youtube.com/watch?v=rfhrKWMSFKU  tutorial*/
//});

 }); /*doc ready*/