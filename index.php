<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bootstrap Portfolio Tutorial : SQUARE</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">YOUR LOGO</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  
                </ul>
            </div>
           
        </div>
    </div>
    <div class="container">
        <div class="row text-center pad-top " id="2c">
            <div class="col-md-12">
                <h1>Map</h1>
            </div>
        </div>
         <div class="row  pad-row " >
            
                <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                     <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
            
                    </div>
                <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                     <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
           
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
             
                    </div>

                      <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                     <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                   
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
               
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                    
                    </div>
                      <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                     <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                   
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
             
                    </div>
                      <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                     <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
                   
                    </div>
             <div class="col-md-3">
                     
                    <img src="assets/img/demoimg.png" class="img-responsive img-pad" alt=""/>
                  <h4>PROJECT NAME</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    </p>
               
                    </div>
            
                
        </div>
       
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- JQUERY EASING  -->
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <script>
        //FOR SCROLLING FUNCTIONING OF LINKS USING EASING PLUGIN
        $(function () {
            $('.navbar a').bind('click', function (event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
    </script>
</body>
</html>
