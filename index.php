<!-----
Project Name : Elsaid Elwafer
Date Created : 10/6/2020
Developer    : Eng Hesham Orabi
------>

<!---------------------- Start Navbar-------------------------->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>الصيد الوافر</title>
		<link rel="stylesheet" type="text/css" href="layout/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" type="text/css" href="layout/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Reem+Kufi|El Messiri|Dancing+Script|Cairo|Lobster|Odibee+Sans|Pacifico&display=swap" rel="stylesheet">
	</head>
	<body>
   

<div id="loading"></div>
        <div class="mynavbar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="layout/images/brand.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item activ">
                            <a class="nav-link mains" href="#">الرئيسية</a>
                        </li>
                        <li class="nav-item activ">
                            <a class="nav-link mains" href="#" data-value="products">منتجاتنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-value="gallery">المعرض</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-value="about">من نحن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"  data-value="contact">اتصل بنا</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!---------------------- End Navbar-------------------------->


        <!---------------------- Start Slider-------------------------->

        <div class="slider">    
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="layout/images/slider/header1.jpg" class="d-block w-100" alt="header1">
                <div class="text">
                    <span>We Love</span>
                    <p>fresh food</p>
                    <button><a href="#"> OUR PRODUCTS</a></button>
                </div>
                </div>
                <div class="carousel-item">
                    <img src="layout/images/slider/header2.jpg" class="d-block w-100" alt="header2">
                    <div class="text">
                        <span>We Love</span>
                        <p>fresh food</p>
                        <button><a href="#"> OUR PRODUCTS</a></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="layout/images/slider/header3.jpg" class="d-block w-100" alt="header3">
                    <div class="text">
                        <span>We Love</span>
                        <p>fresh food</p>
                        <button><a href="#"> OUR PRODUCTS</a></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="layout/images/slider/header4.jpg" class="d-block w-100" alt="header4">
                    <div class="text">
                        <span>We Love</span>
                        <p>fresh food</p>
                        <button><a href="#"> OUR PRODUCTS</a></button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!---------------------- End Slider------------------------------>


        <!---------------------- Start Branches--------------------------->

        <div class='branches'>
            <div class='branches-images'>
                <div class='row'>
                    <div class='col-sm-6 text-right resize'>
                        <h2><a href="#" target="_blank" > فرع الرياض</a></h2>
                        <img src='layout/images/branches/riyadh.jpg' alt='Riyadh branch'>
                    </div>
                    <div class='col-sm-6 text-left resize'>
                        <h2><a href="#" target="_blank" > فرع جدة</a></h2>
                        <img src='layout/images/branches/gedda.jpg' alt='gedda branch'>
                    </div>
                </div>
            </div>

            <div class='fish-images'>
                <div class='row'>
                    <div class='col-sm-4 resize'>
                        <h3><a href="#" target="_blank" >صيد يومي</a></h3>
                        <img src='layout/images/branches/fish1.jpg' alt='Fish 1'>
                    </div>
                    <div class='col-sm-4 resize'>
                        <h3><a href="#" target="_blank" >أسماك طازجة</a></h3>
                        <img src='layout/images/branches/fish2.jpg' alt='Fish 2'>
                    </div>
                    <div class='col-sm-4 resize'>
                        <h3><a href="#" target="_blank" >بحريات</a></h3>
                        <img src='layout/images/branches/fish3.jpg' alt='Fish 3'>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------- End Branches----------------------------->

        <!---------------------- Start Productes--------------------------->

        <div class='productes' id='products'>
            <h2 class='text-center'>منتجاتنا</h2>
            <div class='container'>

                <div id="carousel_two" class="carousel mr slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel_two" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel_two" data-slide-to="1"></li>
                        <li data-target="#carousel_two" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class='row'>
                                <div class='col-md-4 resize text-right'>
                                    <img src='layout/images/branches/fish1.jpg' alt='Fish 2'>
                                    <p>الرياض</p>
                                    <span>دليفري</span>
                                    <h3>صيد يومي</h3>
                                </div>
                                <div class='col-md-4 resize text-center'>
                                    <img src='layout/images/branches/fish2.jpg' alt='Fish 2'>
                                    <p class='second'>جدة</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                                <div class='col-md-4 text-left  resize'>
                                    <img src='layout/images/branches/fish3.jpg' alt='Fish 2'>
                                    <p style="float: left;"> الرياض</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class='row'>
                                <div class='col-md-4 resize text-right'>
                                    <img src='layout/images/branches/fish1.jpg' alt='Fish 2'>
                                    <p>الرياض</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                                <div class='col-md-4 resize text-center'>
                                    <img src='layout/images/branches/fish2.jpg' alt='Fish 2'>
                                    <p class='second'>الدمام</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                                <div class='col-md-4 text-left  resize'>
                                    <img src='layout/images/branches/fish3.jpg' alt='Fish 2'>
                                    <p style="float: left;"> جدة</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class='row'>
                                <div class='col-md-4 resize text-right'>
                                    <img src='layout/images/branches/fish1.jpg' alt='Fish 2'>
                                    <p>الرياض</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                                <div class='col-md-4 resize text-center'>
                                    <img src='layout/images/branches/fish2.jpg' alt='Fish 2'>
                                    <p class='second'>الرياض</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                                <div class='col-md-4 text-left  resize'>
                                    <img src='layout/images/branches/fish3.jpg' alt='Fish 2'>
                                    <p style="float: left;"> جدة</p>
                                    <span>دليفري</span>
                                    <h3>سمك طازج</h3>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>

        

        <!---------------------- End Productes----------------------------->

        <!---------------------- Start Gallery----------------------------->

        <div class='gallery' id='gallery'>
        <h2 class='text-center'>جاليري</h2>
            <div class='row'>
                <div class='col-sm-5 resize'>
                    <img src='layout/images/gallery/g1.jpeg' alt='gallery1' />
                </div>
                <div class='col-sm-7 resize'>
                    <div class='row'>
                        <div class='col-sm-6 resize'>
                            <img src='layout/images/gallery/g2.jpeg' alt='gallery2' />
                        </div>
                        <div class='col-sm-6 resize'>
                            <img src='layout/images/gallery/g3.jpeg' alt='gallery3' />
                        </div>
                        <div class='col-sm-6 resize'>
                            <img src='layout/images/gallery/g4.jpeg' alt='gallery4' />
                        </div>
                        <div class='col-sm-6 resize'>
                            <img src='layout/images/gallery/g5.jpeg' alt='gallery5' />
                        </div>
                    </div>
                </div>
            </div>

            <hr>
        </div>


        <!---------------------- End Gallery------------------------------>

        <!---------------------- Start About Us--------------------------->

        <div class='about-us' id='about'>
        <h2 class='text-center'>من نحن</h2>

            <div class='row'>
                <div class='col-sm-6 resize'>
                <img src='layout/images/about-us/market.jpg' alt='about' />
                </div>
                <div class='col-sm-6 resize'>
                    <p>
                        الصيد الوافر انشأت في عام 1997 وكان تركيزنا في الاساس 
                        علي بيع الاسماك في مدينة الرياض ولكن الامور تسارعت والطلب علي منتجاتنا تضاعف 
                        بسرعة فائقة مما جعلنا نستجيب لرغبة عملائنا, وبدأنا في التوسع 
                        وتنويع المنتجات 
                        <br>
                        في سنة 2005 تم افتتاح فرع مدينة جدة للاستجابة لرغبة جمهورنا
                        في جميع انحاء المملكة .
                        <br>
                        تمتلك الصيد الوافر فرعين الاول في مدينة الرياض والثاني في مدينة جدة .
                    </p>
                </div>
            </div>
            <div class='row'>
            <div class='col-sm-6 resize'>
                    <p>
                        ان تكون الشركة الرائدة عالمياً في صناعة المواد الغذائية 
                        ,وزيادة العائد علي المدي الطويل للمساهمين , وذلك من خلال العلامات التجارية التي نديرها والتي يحبها عملائنا والخدمات الاستثنائية.

                        <br>
                            تجمع هذه الرؤية جميع اقسامنا وعلاماتنا العديدة تحت مظلة واحدة لخدمة عملائنا وتوفير افضل
                    </p>
                </div>
                <div class='col-sm-6 resize'>
                <img src='layout/images/about-us/market2.jpg' alt='vision' />
                </div>
            </div>
        </div>

        <!---------------------- End About Us------------------------------->

        <!---------------------- Start Opinions----------------------------->


        <div class='opinions'>
        <?php

            $testimonialsComm=array();

            $testimonialsComm[] = 'عمل ولا اروع الله يبارك في الشباب';
            $testimonialsComm[] = 'الحقيقة اسماك ظازجة وتنظيف ولا اروع';
            $testimonialsComm[] = 'جميل جدا';
            $testimonialsComm[] = 'ماشاء الله الله يعطيكو العافية';
            $testimonialsComm[] = 'ممتاز جدا بالنظافة وسرعة التوصيل';
            $testimonialsComm[] = 'ماشاء الله سمك جميك جدا مشكورين';
            $testimonialsComm[] = 'عمل ولا اروع الله يبارك في الشباب';
            $testimonialsComm[] = 'رائع جدا';
            $testimonialsComm[] = 'خدمة رائعة';
            $testimonialsComm[] = 'رائع وممتاز والاهم الجودة ممتازة';
            $testimonialsComm[] = 'سمك رائع وخدمة ممتازة';
            $testimonialsComm[] = 'دقة في استلام الطلب وسرعة في التوصيل';
            $testimonialsComm[] = 'ممتاز';
            $testimonialsComm[] = 'رائع جدا تحياتي لكم';
            $testimonialsComm[] = 'سمك رائع وخدمة ممتازة';
            $testimonialsComm[] = '100% شغل نظيف';


            $testimonialsName=array();

            $testimonialsName[] = 'خالد السالم';
            $testimonialsName[] = 'جمال العمري';
            $testimonialsName[] = 'احمد الحربي';
            $testimonialsName[] = 'نايف القحطان';
            $testimonialsName[] = 'زهرة خالد';
            $testimonialsName[] = 'حسام تركي';
            $testimonialsName[] = 'علي الدوسري';
            $testimonialsName[] = 'ريم سليمان';
            $testimonialsName[] = 'سامر علي';
            $testimonialsName[] = 'فهد نواف';
            $testimonialsName[] = 'فاطمة مجدي';
            $testimonialsName[] = 'ياسر احمد';
            $testimonialsName[] = 'سامر علي';
            $testimonialsName[] = 'مروان خالد';
            $testimonialsName[] = 'عمر فيصل';
            $testimonialsName[] = 'هاني الغاشم';

            $testimonialsCity=array();

            $testimonialsCity[] = 'جدة';
            $testimonialsCity[] = 'القصيم';
            $testimonialsCity[] = 'الرياض';
            $testimonialsCity[] = 'مكة';
            $testimonialsCity[] = 'جدة';
            $testimonialsCity[] = 'الطائف';
            $testimonialsCity[] = 'الرياض';
            $testimonialsCity[] = 'المدينة';
            $testimonialsCity[] = 'ابها';
            $testimonialsCity[] = 'مكة';
            $testimonialsCity[] = 'بريدة';
            $testimonialsCity[] = 'الدمام';
            $testimonialsCity[] = 'ابها';
            $testimonialsCity[] = 'مكة';
            $testimonialsCity[] = 'بريدة';
            $testimonialsCity[] = 'الدمام';


        ?>

                <h2>اراء العملاء</h2>
                <div class='active'>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[0];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[0];?></h3>
                    <span><?php echo $testimonialsCity[0];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[1];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[1];?></h3>
                    <span><?php echo $testimonialsCity[1];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[2];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[2];?></h3>
                    <span><?php echo $testimonialsCity[2];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[3];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[3];?></h3>
                    <span><?php echo $testimonialsCity[3];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[4];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[4];?></h3>
                    <span><?php echo $testimonialsCity[4];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[5];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[5];?></h3>
                    <span><?php echo $testimonialsCity[5];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[6];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[6];?></h3>
                    <span><?php echo $testimonialsCity[6];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[7];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[7];?></h3>
                    <span><?php echo $testimonialsCity[7];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[8];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[8];?></h3>
                    <span><?php echo $testimonialsCity[8];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[9];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[9];?></h3>
                    <span><?php echo $testimonialsCity[9];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[10];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[10];?></h3>
                    <span><?php echo $testimonialsCity[10];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[11];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[11];?></h3>
                    <span><?php echo $testimonialsCity[11];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[12];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[12];?></h3>
                    <span><?php echo $testimonialsCity[12];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[13];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[13];?></h3>
                    <span><?php echo $testimonialsCity[13];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[14];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[14];?></h3>
                    <span><?php echo $testimonialsCity[14];?></span>
                </div>
                <div>
                    <p>
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                        <?php echo $testimonialsComm[15];?>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>

                    </p>
                    <h3><?php echo $testimonialsName[15];?></h3>
                    <span><?php echo $testimonialsCity[15];?></span>
                </div>
            
        </div>
        <hr>
        <!---------------------- End Opinions----------------------------->

        <!---------------------- Start Call Us----------------------------->
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                $firstName = filter_var($_POST['firstname'] , FILTER_SANITIZE_STRING);
                $lastName = filter_var($_POST['lastname'] , FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'] , FILTER_SANITIZE_EMAIL);
                $msg = filter_var($_POST['message'] , FILTER_SANITIZE_STRING);

                $formsErrors = array();

                if(strlen($firstName) < 3){
                    $formsErrors[] = 'Your Name Must Be More Than <strong> 3 Characters </strong>';
                }
                if(strlen($lastName) < 3){
                    $formsErrors[] = 'Your Last Name Must Be More Than <strong> 3 Characters </strong>';
                }
                if(filter_var($email, FILTER_VALIDATE_EMAIL) != true){
                    $formErrors[] = 'This Email Is Not <strong> Valid ! </strong>';
                }
                if(empty($msg)){
                    $formsErrors[] = 'Your Ask  Must Be Not <strong> Empty </strong>';
                }

                if(empty($formsErrors)){
                
                    $to      = 'heshamoraby712@gmail.com';
                    $subject = 'the subject';
                    $message = 'hello';
                    $headers = 'From: webmaster@example.com' . "\r\n" .
                        'Reply-To: webmaster@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                    
                    mail($to, $subject, $message, $headers);
            
                    echo "<div class='alert alert-success success'> Message Send Successfully" . "</div>";
                    header("refresh:3; home.php");
                    exit();
                }else{

                    $ErrorNum=count($formsErrors);
                    echo "<div class='text-center errorNum'>! Sorry You Have <strong>$ErrorNum </strong> Errors"  . "</div>";
                    
                    foreach($formsErrors as $error){
                        
                        
                        echo "<div class='alert alert-danger error'> $error" . "</div>";
                    }
                    
                }

            }
        ?>

        <div class='call-us' id='contact'>
            <h2 class=' text-center'>تواصل معنا</h2>
            <div class='container'>

                <div class='row'>

                    <div class='col-lg-6 text-center'>
                        <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
                            <input type='text' name='firstname' placeholder='الاسم ' required autocomplete='off'  >
                            <input  name='email' placeholder='البريد الالكتروني'  requiredautocomplete='off' >
                            <input type='text' name='lastname' placeholder='رقم الجوال' required autocomplete='off'>
                            <textarea name='message' required placeholder='محتوي الرسالة'></textarea>
                            <input type='submit' value='ارسال'>
                        </form>
                    </div>
                    <div class='col-lg-6 text-center'>
                        <div class=" map">
                            <iframe width="100%" height="509" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14856.1702474286!2d39.204956!3d21.427572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9dddb2fab2466149!2z2LTYsdmD2Kkg2KfZhNi12YrYryDYp9mE2YjYp9mB2LEg2YTYqNmK2Lkg2KfZhNin2LPZhdin2YMgKNmB2LHYuSDYrNiv2Kkp!5e0!3m2!1sar!2seg!4v1592165258562!5m2!1sar!2seg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div> 
                    </div>
                </div>
                <ul class='list-unstyled text-center'>
                    <li><a href='www.instagram.com' target='_blank'><i class="fab fa-instagram"></i></a></li>
                    <li><a href='www.linkedin.com' target='_blank'><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href='www.twitter.com' target='_blank'><i class="fab fa-twitter"></i></a></li>
                    <li><a href='www.facebook.com' target='_blank'><i class="fab fa-facebook-f"></i></a></li>

            </ul>
            </div>
        </div>


        <!---------------------- End Call Us------------------------------->

        <!---------------------- Start footer------------------------------->


        <div class="footer">
                <div class='container'>
                    <div class='info'>
                        <div class='row'>
                            <div class='col-lg-4 text-center'>
                                <h4>تفضل بزيارتنا</h4>
                                <hr>
                                <p><span>  فرع الرياض :</span> ش 45 حي المدينة - الرياض</p>
                                <p><span>  فرع جدة :</span> ش مبني السفارات القديمة - جدة</p>

                            </div>
                            <div class='col-lg-4 text-center'>
                                <h4>راسلنا</h4>
                                <hr>
                                <p class="call-1 text-center">
                                <a href="https://wa.me/0096650442291" target="_blank">0096650449291<i class="fab fa-whatsapp"></i> </a>
                                </p>
                                <p class="call-1 text-center">
                                <a href="https://wa.me/0096658315966" target="_blank">0096652315966<i class="fab fa-whatsapp"></i> </a>
                                </p>
                                <p class="call-2 text-center">
                                <a href="mailto:alsaidalwafer.net?subject=contact" >info@alsaidalwafer.net<i class="far fa-envelope-open"></i> </a>
                                </p>
                            </div>
                            <div class='col-lg-4 text-center timing'>
                                <h4>مواعيد العمل</h4>
                                <hr>
                                <p><span>  فرع الرياض :</span> يتم العمل به من الساعة الحادية عشر صباحا وحتي الساعة الثانية عشر منتصف الليل</p>
                                <p><span>  فرع جدة :</span> يتم العمل به من الساعة التاسعة صباحا وحتي الساعة العاشرة مساءاً</p>
                                <p> سعداء بخدمتكم </p><i class="far fa-smile"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='copyright'>
                        
                    <hr> 
                    <div class='row'>
                        <div class='col-sm-6'>
                            <p class='developer text-right'>تصميم وتطوير :<a href='https://heshamoraby.000webhostapp.com/' target='_blank'><span> هشام عرابي</span></a></p>
                        </div>
                        <div class='col-sm-6'>
                            <p>جميع الحقوق محفوظة لدي مجموعة <span>الصيد الوافر</span></p>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="scrollTop">Top</button>
                </div>
        </div>
                
            <script src="layout/js/jquery-3.4.1.min.js"></script>
            <script src="layout/js/jquery.nicescroll.min.js"></script>
            <script src="layout/js/bootstrap.js"></script>
            <script src="layout/js/script.js"></script>
	</body>
</html>

<!--------------------------- End footer---------------------------->

