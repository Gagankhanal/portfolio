<?php
include "partial/_dbconnect.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $sql="INSERT INTO `hirecontact` ( `name`, `phone`, `email`, `message`) VALUES ( '$name', '$phone', '$email', '$message')";
    $result=mysqli_query($conn ,$sql);
  }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- FAVICON -->
    <link rel="icon" href="img/fevicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive_style.css">
     

    <title>Hello, world!</title>
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="75">
      <!-- navbar section -->
      <header class="header-wrapper">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt="logo" ></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-stream navbar-toggler-icon"></i>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="#service">Services</a></li>
                  <li class="nav-item"><a class="nav-link" href="#project">Projects</a></li>
                  <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                  <li class="nav-item mt-1"><a class=" main-btn " href="#contact">Hire me</a></li>
                </ul>
              </div>
            </div>
          </nav>
      </header>
      
   <!-- banner section -->
     <section id="home" class="banner_wrapper">
       <div class="container grad">
         <div class="row">
           <div class="col-sm-12 text-center text-md-start">
             <h6>WELCOME TO MY WEBSITE</h6>
             <H1>I'm Gagan Khanal <br><span>Web Application Developer </span><br> Based in Nepal</H1>
             <div class="mt-4">
               <a href="file/webDevelopment.pdf" class="main-btn" download="gaganportfolio.pdf">Download CV</a>
             </div>
           </div>
         </div>
       </div>
     </section>

     <!-- about section -->
     <section class="about_wrapper" id="about">
       <div class="container">
         <div class="row justify-content-between align-item-center">
           <div class="col-lg-5 mb-4 mb-lg-0">
             <img src="img/banner.jpg" class="img-fluid rounder-3" alt="about-us" >
           </div>
           <div class="col-lg-7 ps-lg-5 text-center text-lg-start">
             <div class="my-3 my-lg-0">
               <span class="subtitle">My About detail</span>
               <h2>About me</h2>
               <p>I am very much interested in learning
                Web application Development and
                Programming. As I am an IT student, I
                am very fond of doing technological
                stuff and I want to make career in
                web application development .
                </p>
             </div>
             <div class="pt-4">
              <ul class="nav nav-pills mb-3 justify-content-center justify-content-lg-between" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="true">Skills</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education" aria-selected="false">Education</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-trainning-tab" data-bs-toggle="pill" data-bs-target="#pills-trainning" type="button" role="tab" aria-controls="pills-trainning" aria-selected="false">Trainning</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill" data-bs-target="#pills-experience" type="button" role="tab" aria-controls="pills-experience" aria-selected="false">Experience</button>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                  <div class="single-progress">
                    <h6>HTML,CSS </h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="label">90%</span>
                  </div>
                  <div class="single-progress">
                    <h6>PHP</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="label">85%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Javascript</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="label">65%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Django, python</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="label">75%</span>
                  </div>
                  <div class="single-progress">
                    <h6>Bootstrap</h6>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="label">90%</span>
                  </div>
                </div>

                <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
                  <ul class="ps-0 text-start">
                   <li>
                     <a href="#">
                      School Level Certificate (SLC)
                       <span>-Laxmanghat Secondary school, Banganga ,Kapilvastu</span>
                      </a>
                      2070BS
                    </li>
                    <li>
                      <a href="#">
                        +2 level Examination
                        <span>Kalika Campus ,Butwal  ,Kalikanagar</span>
                       </a>
                       2073 B.S
                     </li>
                     <li>
                      <a href="#">
                        Bachelor of Science in Computer Science &  Information Technology 
                        <span>Butwal Multiple Campus, Tribhuvan University, Butwal, Rupandehi </span>
                      </a>
                      2078B.s
                     </li>
                  </ul>
                </div>

                <div class="tab-pane fade" id="pills-trainning" role="tabpanel" aria-labelledby="pills-trainning-tab">
                  <ul class="ps-0 text-start">
                    <li>
                      <a href="#">
                        15 days Trainning 
                        <span>-Hardware & Online resources </span>
                       </a>
                       29th dec 2016 to 15th jan 2017
                     </li>
                     <li>
                       <a href="#">
                         30 Days Trainning
                         <span>
                           Wordpress
                         </span>
                        </a>
                        6th augest 2017 to 5th september 2017
                      </li>
                      <li>
                       <a href="#">
                        30 Days Trainning
                         <span>Web Designing</span>
                        </a>
                        27th dec 2017 to 26th jan 2018
                      </li>
                    
                   </ul>
                </div>

                <div class="tab-pane fade" id="pills-experience" role="tabpanel" aria-labelledby="pills-experience-tab">
                  <ul class="ps-0 text-start">
                    <li>
                      <a href="#">
                       No working Experience yet!
                        <span></span>
                       </a>
                     </li>
                     <li>
                       <a href="">
                         <span></span>
                        </a>
                      </li>
                      <li>
                       <a href="">
                         <span></span>
                        </a>
                      </li>
                      <li>
                       <a href="">
                         <span></span>
                        </a>
                      </li>
                   </ul>
                </div>
              </div>
             </div>
           </div>
         </div>
       </div>
     </section>

     <!-- services section -->
     <section class="service_wrapper" id="service">
       <div class="container">
         <div class="row">
           <div class="col-sm-12 mb-4 text-center">
            <span class="subtitle ">what i can offer for you</span>
            <h2>My Awesome services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatem, adipisci eius aspernatur <br class="d-none d-md-block">
              iure praesentium aliquid cupiditate quas quod minus laborum temporibus. </p>
           </div>
         </div>
         <div class="row">
           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <i class="fas fa-server fa-3x my-3 m-auto ic"></i>
              <div class="card-body text-md-start text-center">
                <h3> Network security</h3>
                <p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <i class="fas fa-tv fa-3x  my-3 m-auto ib"></i>
              <div class="card-body text-md-start text-center">
                <h3>Website Development</h3>
                <p>It consists of the policies, processes and practices adopted to prevent, detect and monitor unauthorized access.</p>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <i class="fas fa-handshake fa-3x my-3 m-auto ic" ></i>
              <div class="card-body text-md-start text-center">
                <h3>customizable design</h3>
                <p>We design  or build according to the individual or personal specifications or preference.</p>
              </div>
            </div>
           </div>

           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
             <i class="fas fa-rss fa-3x m-auto my-3 ia"></i>
              <div class="card-body text-md-start text-center">
                <h3>Business Strategy</h3>
                <p>A business strategy is an outline of the actions and decisions a company plans to take to reach its goals and objectives.</p>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <i class="fa fa-3x fa-check-circle m-auto my-3 ib"></i>
              <div class="card-body text-md-start text-center">
                <h3>Maintainance</h3>
                <p>Functional checks, repairing or replacing of necessary devices, equipment, machinery, building infrastructure, will be provided</p>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <i class="fas fa-dungeon fa-3x m-auto my-3 ia"></i>
              <div class="card-body text-md-start text-center">
                <h3>Collabration</h3>
                <p>It is a working practice whereby individuals work together for a common purpose to achieve business benefit.</p>
              </div>
            </div>
           </div>
         </div>
       </div>
     </section>

     <!-- project section -->
    <section class="project_wrapper" id="project">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 mb-4 text-center">
            <span class="subtitle ">My all Projects</span>
            <h2>My latest Projects</h2>
            <p>Here are the list of some projects i had created during this lockdown <br class="d-none d-md-block">
              your feedback is most appereciated </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span style="background-image: url('../img/project/pro1.png');"></span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span style="background-image: url('../img/project/pro2.png');"></span>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span style="background-image: url('../img/project/pro3.png');"></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span style="background-image: url('../img/project/pro4.png');"></span>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card p-0">
              <span style="background-image: url('../img/project/pro5.png');"></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section -->
    <section class="contact_wrapper" id="contact">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-6 order-2 order-lg-1 mb-lg-0 text-lg-start text-center">
            <span class="subtitle">My complete project</span>
            <h2>Hire me</h2>
            <div class="row contact_detail mb-4">
              <label class="col-lg-4 col-sm-3 mb-2 ">Mobile number:</label>
              <div class="col-lg-8 col-sm-9">
                <a href="">9821550276</a>
              </div>

              <label class="col-lg-4 col-sm-3 mb-2">Email Address:</label>
              <div class="col-lg-8 col-sm-9">
                <a href="">kanxokapil11@gmail.com</a>
              </div>
            </div>
            <form action="index.php" method="post">
              <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-4">
              <label for="phone" class="form-label">Phone No:</label>
              <input type="phone" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              </div>
              <div class="mb-4">
                <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
              </div>
              <button class="main-btn" name="submit" value="submit">Submit</button>
            </form>
          </div>
          <div class="order-1 order-lg-2 col-lg-6 mb-lg-0 mb-4">
            <img src="img/contact.jpg" class=" img-fluid" alt="con">
          </div>
        </div>
      </div>
    </section>

    <!-- footer section -->
    <div class="footer_wrapper">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 col md-6 text-md-start text-center ">
            <img src="img/logo.png" alt="" style="width: 100px;" class="img-fluid mb-3 mb-md-0">
          </div>
          <div class="col-lg-4 col-md-6">
            <ul class="list-unstyled icon d-flex justify-content-center justify-content-md-end justify-content-lg-center mb-3 mb-md-0">
              <li><a href=""> <i class="fab fa-facebook-f "></i></a>
              </li>
              <li><a href=""><i class="fab fa-instagram "></i></a> </li>
              <li><a href=""><i class="fab fa-twitter "></i></a> </li>
              <li><a href=""><i class="fab fa-github "></i>
              </a> </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-12">
          <div class="copyright mb-3 text-lg-start text-center mb-md-0">
            <p class="mb-0">Be happy with <a href="#">kanxokapil@gmail.com</a>copyright @ 2022</p>
          </div>
          </div>
        </div>
      </div>
    </div>
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS --> -->
<!--     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   -->
       <!-- Custom Js Link -->
       <script src="js/main.js"></script>
  </body>
</html>