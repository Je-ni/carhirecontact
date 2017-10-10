<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    </script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body {
        box-sizing: border-box;
    }
    .img{
        display:block;
        max-width: 100%;
        height: auto;
        
    }
    main .container{
        background-color: white;
        max-width:1020px;
        position: relative;
                
        padding:0 30px 60px 30px;
        margin-top: -30px;
    }
    .img-1{
        margin: 15px 0;
    }
    .imgs{
        margin-top: 20px;
    }
    .contact{
        position: relative;
        top: 30px;
        margin-bottom: 10px;
        padding: 30px 0;
    }
    .nav-container{
        
        display: block;
    }
    .navi{
        box-sizing: border-box;
        border: 1px solid;
        position: relative;
        top: 60px;
        padding: 0 20px;
        margin: 0 0 10px 0;
        float: left;
    }
    .ul{
        list-style-type: none;
        text-align : left;

        
    }
   
    </style>

</head>
<body style='background-color: #DCDADA;'>
    <header class='jumbotron'>
        <?php include('header.php') ?>
    </header>
    <main style=''>
    <div class=''>
        <section class='container'>
            <div class='row'>
                <div class='col-md-4 nav-container'>
                    <nav class='navi'>
                        <div class=''>
                            <ul class='ul'>
                                <li class=''> <a href="">Car Hire</a> </li>
                            <hr>
                                <li> <a href="">Truck Hire</a> </li>
                                <hr>
                                <li class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    Show more</li>
                            </ul>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <h4>Contacts</h4>
                            <ul class='ul'>
                            
                                <li> <a href="">Loremp imps</a> </li><br>
                                <li> <a href="">Loremp imps</a> </li><br>
                                <li> <a href="">Loremp imps</a> </li><br>
                                <li> <a href="">Loremp imps</a> </li><br>
                                <li> <a href="">Loremp imps</a> </li><br>
                            </ul>
                             <hr>
                            <ul class='ul'>
                                <li> <a href="">Loremp imps</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class='col-md-8'>
                    <div class='contact'>
                        <h2 style="color:#FF7D19;">Contact Us</h2>
                    </div>
                    <div style='padding: 2% 0;'>
                        <div class='img-1'>
                            <img src="https://www.sixt.com/fileadmin/files/corporate/sx-kontakt.jpg" alt="" class=
                            'img img-responsive'>
                        </div>
                        <div>
                            <p style="font-size:17px; color:#FF7D19"> <strong>We are here for you</strong></p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                        </div>
                    </div>
                    <div class='row '>
                        <div class='col-md-6 imgs' >
                            <a href="">                            
                            <img src="https://www.sixt.com/fileadmin/user_upload/ic_anschrift.jpg" alt="" class='img' height='85' width='70' >
                            </a>
                            <h4>write-up header</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <a href="">dkadkg</a>
                        </div>
                        <div class='col-md-6 imgs'>
                            <a href="">                            
                            <img src="https://www.sixt.com/fileadmin/user_upload/ic_anschrift.jpg" alt="" class='img' height='85' width='70' >
                            </a>
                            <h4>write-up header</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <a href="">dkadkg</a>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-6 imgs'>
                            <a href="">                            
                            <img src="https://www.sixt.com/fileadmin/user_upload/ic_anschrift.jpg" alt="" class='img' height='85' width='70' >
                            </a>
                            <h4>write-up header</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <a href="">dkadkg</a>
                        </div>
                        <div class='col-md-6 imgs'>
                            <a href="">                            
                            <img src="https://www.sixt.com/fileadmin/user_upload/ic_anschrift.jpg" alt="" class='img' height='85' width='70' >
                            </a>
                            <h4>write-up header</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <a href="">dkadkg</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>       
    </div>
    </main>
    <footer>
        <?php include('footer.php') ?>
    </footer>
    
</body>
</html>