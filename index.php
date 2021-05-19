<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rio Marie Junio</title>
</head>

<style>

    *{
        font-family: helvetica;
        letter-spacing: 2.5px;
        line-height: 18px;
        scroll-behavior: smooth;
    }

    body{
        overflow-x: hidden;
        position: relative;
    }

    section{
        width: 100vw;
    }

    .home{
        height: 100vh;
        padding-top: 350px;
        background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.8)),url(pictures/mees.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size:cover;
        background-attachment: fixed;
    }

    .home button{
        background: gray;
        color: white;
        border-color: gray;
        border-radius: 17px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .pic img{
        width: 180px;
        height: 180px;
       
    }

    img:hover{
        opacity: .8;
        transition: 0.10s
    }

    .pic{
        padding: 10px 5px;
        margin: 0;
    }
    .skills{
        margin: 0;
        padding-top: 40px;
    }

    .carousel img{
        width: 1200px;
        height: 1200px;
    }

    .projects{
        margin: 0;
        padding-top: 40px;
    }

    .projects button{
        background: gray;
        color: white;
        border-color: gray;
        border-radius: 17px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .projects button:hover{
        background-color: white;
        color:gray;
    }


    .about{
        margin: 0;
        padding-top: 40px;
    }

    .about p{
       font-size: 16px;
    }

    .pics img{
        width: 290px;
        height: 200px;
    }
    .contact{
        background: #b3b3b3;
    }
    .car{
        margin: 0;
        padding-top: 40px;
    }
    img{
          background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.8))
    }
   

      
</style>

<body data-spy="scroll" data-target=".navbar">

    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <!-- Responsive NavBar: Apply Collapsible Navbar with Dropdown-->

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#skills">Skills</a></li>
                <li class="dropdown">
                    <!-- Remove the sign # in a href="" for Dropdown ex. Projects-->
                    <a href="projects" class="dropdown-toggle" data-toggle="dropdown">Projects&nbsp;<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#c1">Restaurant Website</a></li>
                        <li><a href="#c2">Student & Faculty Record</a></li>
                        <li><a href="#c3">Headphone Landing Page</a></li>
                        <li><a href="#c4">Movie Ticket Booking</a></li>
                    </ul>
                </li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
        </div>
    </nav>

     <!-- Responsive NavBar -->



     <!-- Home -->

     <section id="home" class="home">
     <center>
        <h1 style="color:white; font-size:40px; text-shadow: 1px 2px black;" class="text-center">Rio Marie Junio</h1>
        <p style="color:white; text-shadow: 1px 2px black;" class="text-center">Aspiring Programmer</p>
        <a href="#contact"><button class="btn btn-default btn-lg">Contact Me</button></a>
    </center>
     
     </section>

     <!-- Home -->




     <!-- Skills -->
 
    <section id="skills" class="skills container-fluid">
    
        <div class="page-header">
            <h1 style="text-shadow: 1px 2px black;" class="text-center"><span class="label label-primary">My Skills</span></h1>    
        </div>

        <div class="row container-fluid">
         <div class="col-lg-4 text-center pic">
            <img data-toggle="tooltip" data-placement="left" title="PHP" src="pictures/1.png" alt="PHP Logo" class="img-thumbnail img-responsive"></div>
         
         <div class="col-lg-4 text-center pic">
            <img data-toggle="tooltip" data-placement="left" title="Java" src="pictures/5.png" alt="Java Logo" class="img-thumbnail img-responsive"></div> 
         
         <div class="col-lg-4 text-center pic">
            <img data-toggle="tooltip" data-placement="left" title="MySql" src="pictures/6.png" alt="MySql Logo" class="img-thumbnail img-responsive"></div>
        </div>
    
        <br>

        <div class="row container-fluid">
         <div class="col-lg-4 text-center pic">
            <img <img data-toggle="tooltip" data-placement="left" title="HTML" src="pictures/3.png" alt="HTML Logo" class="img-thumbnail img-responsive"></div>
         
         <div class="col-lg-4 text-center pic">
            <img <img data-toggle="tooltip" data-placement="left" title="CSS" src="pictures/4.png" alt="CSS Logo" class="img-thumbnail img-responsive"></div> 
         
         <div class="col-lg-4 text-center pic">
            <img <img data-toggle="tooltip" data-placement="left" title="Javascript" src="pictures/2.png" alt="Javascript Logo" class="img-thumbnail img-responsive"></div>
        </div>
    
    </section>
    
     <!-- Skills -->

    


     

     <!-- Projects-->

     <section id="projects" class="projects container-fluid">

     <div class="page-header">
            <h1 style="text-shadow: 1px 2px black;" class="text-center"><span class="label label-default">My Projects</span></h1>    
     </div>

     <!-- Carousel 1--> 
     <div id="c1" class="row container car">
                <div id="myCarousel1" class="col-md-8 col-md-offset-3 carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                        <li data-target="#myCarousel1" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/m1.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/m2.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/m3.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/m4.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/m5.png">
                        </div>

                        <a href="#myCarousel1" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#myCarousel1" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>

            </div>
                
            <h1 class="text-center">Restaurant Website</h1>    
            <p class="text-center">Desktop Design</p>
            <center><a href="https://riomariejunio.000webhostapp.com/" target="_blank"><button class="btn">PREVIEW</button></a></center>   

       
            <br>
            <br>
            <br>
            <br>

            <!-- Carousel 2--> 
            <div id="c2" class="row container car">
                <div id="myCarousel2" class="col-md-8 col-md-offset-3 carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                        <li data-target="#myCarousel2" data-slide-to="3"></li>
                        <li data-target="#myCarousel2" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/d1.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/d2.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/d3.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/d4.png">
                        </div>

                        <div class="item carousel">
                            <img class="img-thumbnail img-responsive" src="pictures/d5.png">
                        </div>

                        <a href="#myCarousel2" class="left carousel-control" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a href="#myCarousel2" class="right carousel-control" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>

            </div>
                
            <h1 class="text-center">Student & Faculty Record</h1>    
            <p class="text-center">Desktop Design</p>
            <center><a href="https://riomarriejunio.000webhostapp.com/" target="_blank"><button class="btn">PREVIEW</button></a></center>
            
            <br>
            <br>
            <br>
            <br>




            <!--Carousel 3-->
            <div id="c3" class="row container car">
                    <div id="myCarousel3" class="col-md-8 col-md-offset-3 carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active carousel">
                                <img class="img-thumbnail img-responsive" src="pictures/Hehe.png">
                            </div>
                        </div>

                    </div>

            </div>
                    
            <h1 class="text-center">Headphone Landing Page</h1>    
            <p class="text-center">Desktop Design</p>

              
            <br>
            <br>
            <br>
            <br>

             <!--Carousel 4-->
             <div id="c4" class="row container car">
                    <div id="myCarousel4" class="col-md-8 col-md-offset-3 carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active carousel">
                                <img class="img-thumbnail img-responsive" src="pictures/20.png">
                            </div>
                        </div>

                    </div>

            </div>
                    
            <h1 class="text-center">Movie Ticket Booking</h1>    
            <p class="text-center">Desktop Java App Design</p>
    </section>
    
     <!-- Projects-->



    <!-- About-->

      <section id="about" class="about container">

        <div class="page-header">
            <h1 style="text-shadow: 1px 2px black;" class="text-center"><span class="label label-primary">About Me</span></h1>    
        </div>

        <br>

        <div class="row container-fluid">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 style="text-shadow: 1px 2px black;">Java Programmer</h4>
                    </div>
                    <div class="pics panel-body">
                        <img src="pictures/java.jpg" class="img-rounded img-responsive center-block">
                        <br>
                        <p class="lead text-center">I do Java Programming</p>
                            <!--MODAL -->
                            <div class="container">
                           
                                <button class="btn btn-primary col-xs-12 col-lg-3 col-lg-offset-1 text-center" data-toggle="modal" data-target="#myModal">View More</button>        
                                
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" data-dismiss="modal">&times;</button>
                                                <h4>About Me</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="padding:20px;" class="text-justify text-muted">&nbsp;&nbsp;&nbsp;&nbsp;I am currently a 2nd-year student in New Era University 
                                                    taking Bachelor of Science in Information Technology.
                                                    I aspire to further hone and practice my basic skills
                                                    and knowledge vis-à-vis different fields in IT such as 
                                                    Web Development and Design, Programming Skills and Information 
                                                    Management.                            
                                                    <br> 
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;Regarding the programming languages, most of the time, I spent it using
                                                    Java. I also have basic knowledge using PHP and Javascript programming languages, 
                                                    because usually these programming languages share similar syntax, they just differ 
                                                    in structure of words. Thorough practices and numerous amount of times are being 
                                                    dedicated so that I can finish the projects.
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-info" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                           

                    </div>
                    </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 style="text-shadow: 1px 2px black;">Web Designer</h4>
                    </div>
                    <div class="pics panel-body">
                        <img src="pictures/web.jpg" class="img-rounded img-responsive center-block">
                        <br>
                        <p class="lead text-center">I do HTML, CSS & BOOTSTRAP</p>
                             <!--MODAL -->
                             <div class="container">
                           
                                <button class="btn btn-primary col-xs-12 col-lg-3 col-md-offset-1 text-center" data-toggle="modal" data-target="#myModal2">View More</button>        
                                
                                <div class="modal fade" id="myModal2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button class="close" data-dismiss="modal">&times;</button>
                                                <h4>About Me</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="padding:20px;" class="text-justify text-muted">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;I become interested in 
                                                    Web Development course wherein I learn how to use HTML, CSS, and Bootstrap.
                                                    I am fond of creating designs and arts.
                                                    <br> 
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    I aspire to further hone and excell my basic skills
                                                    and knowledge vis-à-vis different technologies that 
                                                    is being used in the field of Web Development such as
                                                    frameworks, database and lay-out designs which includes 
                                                    responsiveness. 
                                                    

                                                    
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-info" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                               </div>
                           </div>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>


         <!-- CONTACT -->

         <section id="contact" class="contact container-fluid">

         <div class="page-header">
                <h1 class="text-center" style="text-shadow: 1px 2px black;"><span class="label label-default">Contact Me</span></h1>
        </div>

        <form class="col-md-6 col-md-offset-3">
            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"> <span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" placeholder="Name">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" class="form-control" placeholder="Email">
            </div>
            </div>

            <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-paperclip"></span></span>
                <input type="text" class="form-control" placeholder="Subject">
            </div>
            </div>

            <div class="form-group">
                <textarea class="form-control" placeholder="Content" name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <button class="form-control col-md-12 btn btn-success">SUBMIT</button>
                <br>
            <br>  
            <br>
            <br>  
            </div>  
        </form>
        <br>  
           
        </section>
        
        
          


</body>
</html>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
