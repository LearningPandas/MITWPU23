

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
    <link rel="stylesheet" href="./css/custom.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/custom-style.css" >
    <title>LearningPandas</title>
    <link rel="icon" type="image/x-icon" href="./images/pngegg.png">
  </head>



  <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand mb-0" href="#">
          <img src="./images/pngegg.png" width="50px">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">


          <ul class="navbar-nav mr-auto container-fluid">
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-list-ul"></i> Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#cybersec">CyberSecurity</a>
                <a class="dropdown-item" href="#dataSci">Data Science</a>
                <a class="dropdown-item" href="#py">Python</a>
                <a class="dropdown-item" href="#webdes">Web Design</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./contact.html">Any Other Suggestions For Courses</a>
              </div>
            </li>

            <li class="nav-item col-8">
                     <form class="form-inline my-2 my-lg-0 inbutton">
                            <input class="form-control form-control-lg mr-sm-0 col-8 bg-light border-0 "
                            style="border-radius: 5px 0px 0px 5px" 
                            type="search" placeholder="Search for Courses" aria-label="Search">
                             
                            <button class="btn btn-light btn-lg  my-2 my-sm-0 ml-0 col-2" 
                          style="border-radius: 0px 5px 5px 0px;"
                            type="submit"><i class="fas fa-search text-danger "></i></button>
                        </form>
                    </li>

          </ul>

    
                <a class="nav-link btn btn-danger mx-2" href="login.php">Login / Sign Up</a>
                

          
        </div>
      </nav>

            
    
     
      <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
         

          <div class="container">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <div class="col-md-4 text-dark">
                        <h3 class="display-5">Unlock Your Potential!</h3>
                        <p class="lead" style="font-size: 15px;">LearningPandas is the simplest and most effective <br>e-learning platform to train passionate learners</p>
                  </div>

                  <div class="col-md-6">
                        <form class="form-inline my-2 my-lg-0" >
                                <input class="form-control form-control-lg mr-sm-0 col-8
                                 border-right-0 "
                                style="border-radius: 5px 0px 0px 5px; " 
                                 type="search" placeholder="What Do You Want To Learn?" 
                                 aria-label="Search">
                                
                                <button class="btn btn-light btn-lg my-2 my-sm-0 col-2 border-left-0" 
                                style="border-radius: 0px 5px 5px 0px;"
                                type="submit"><i class="fas text-danger fa-search"></i></button>
                            </form>
                    </div>


                  </div>
                 
                </div>
              </div>

       </div>

       <div id ="dataSci"></div>
       <div class="container mt-5" >
          <h3>
               <small class="text-muted">Top Courses in "Data Science"</small>
             </h3>
           <div class="card-deck" >
                 
                   <div class="card mx-1">
                      <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>

                     <img class="card-img-top h-50"    src="images/statisticsdatasci.png" alt="Card image cap">
                     <div class="card-body px-2">
                      
                       <a href="mmstats.php"><h6>MicroMasters Program in Statistics and Data Science</h6></a>
                       <p class="card-text" style="font-size: 11px;">Concepts of Statistics, Data Analysis Techniques, Probability and much more...</p>
                       <p class="card-text"><small class="text-muted">
                           <i class="fas fa-star text-warning"></i>
                           <i class="fas fa-star text-warning"></i>
                           <i class="fas fa-star text-warning"></i>
                           <i class="fas fa-star text-warning"></i>
                         4.0 (10,530)</small>
                         <span class="d-block"></span>
                         <span class="float-right"> 
                           <small style="text-decoration: line-through;" class="text-muted">
                             (₹1999)</small>₹0.00 </span>
                         
                         </p>
                     </div>
                   </div>

                 
                   <div class="card mx-1 ">
                       <img class="card-img-top h-50"    src="images/machineljs.webp" alt="Card image cap">
                       <div class="card-body px-2">
                         <a href="machljs.php"><h6>Machine Learning with Javascript</h6></a>
                         <p class="card-text" style="font-size: 11px;">Dives into Advanced Memory Profiling, Building Tensorflow JS library-powered apps...</p>
                         <p class="card-text"><small class="text-muted">
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star text-warning"></i>
                             <i class="fas fa-star-half text-warning"></i>
                           4.5 (11,560)</small>
                           <span class="d-block"></span>
                           <span class="float-right"> 
                             <small style="text-decoration: line-through;" class="text-muted">
                               (₹1599)</small>₹0.00 </span>
                           
                           </p>
                       </div>
                     </div>
                     
            
                     <div class="card mx-1 ">
                        <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>

                         <img class="card-img-top h-50"    src="images/machinelpy.jpg" alt="Card image cap">
                         <div class="card-body px-2">
                           <a href="machlpy.php"><h6>Machine Learning with Python</h6></a>
                           <p class="card-text" style="font-size: 11px;">You'll Acquire Knowledge about Neural Networks, Tensor Operations...</p>
                           <p class="card-text"><small class="text-muted">
                               <i class="fas fa-star text-warning"></i>
                               <i class="fas fa-star text-warning"></i>
                               <i class="fas fa-star text-warning"></i>
                               <i class="fas fa-star text-warning"></i>
                             4.0 (13,510)</small>
                             <span class="d-block"></span>
                             <span class="float-right"> 
                               <small style="text-decoration: line-through;" class="text-muted">
                                 (₹1599)</small>₹0.00 </span>
                             
                             </p>
                         </div>
                       </div>
   
                     
                       <div class="card mx-1 ">
                           <img class="card-img-top h-50"    src="images/deepl.jpeg" alt="Card image cap">
                           <div class="card-body px-2">
                             <a href="deepl.php"><h6>Deep Learning</h6></a>
                             <p class="card-text" style="font-size: 11px;">Build and train deep neural networks, identify key architecture parameters...</p>
                             <p class="card-text"><small class="text-muted">
                                 <i class="fas fa-star text-warning"></i>
                                 <i class="fas fa-star text-warning"></i>
                                 <i class="fas fa-star text-warning"></i>
                                 <i class="fas fa-star text-warning"></i>
                               4.0 (14,260)</small>
                               <span class="d-block"></span>
                               <span class="float-right"> 
                                 <small style="text-decoration: line-through;" class="text-muted">
                                   (₹1999)</small>₹0.00 </span>
                               
                               </p>
                           </div>
                         </div>
                                  
                   
                     
                         <div class="card mx-1 ">
                            <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>

                             <img class="card-img-top h-50"    src="images/googleda.jpg" alt="Card image cap">
                             <div class="card-body px-2">
                               <a href="googleda.php"><h6>Google Data Analytics</h6></a>
                               <p class="card-text" style="font-size: 11px;">Helps you Simulate Real-World Data Analytics Scenarios that are Critical for Success in the Workplace....</p>
                               <p class="card-text"><small class="text-muted">
                                   <i class="fas fa-star text-warning"></i>
                                   <i class="fas fa-star text-warning"></i>
                                   <i class="fas fa-star text-warning"></i>
                                   <i class="fas fa-star text-warning"></i>
                                   <i class="fas fa-star-half text-warning"></i>
                                 4.5 (18,560)</small>
                                 <span class="d-block"></span>
                                 <span class="float-right"> 
                                   <small style="text-decoration: line-through;" class="text-muted">
                                     (₹2999)</small>₹0.00 </span>
                                 
                                 </p>
                             </div>
                           </div>
                  
                 </div>



                 
      </div>





      <div id ="py"></div>
       <div class="container mt-5" >
           <h3>
                <small class="text-muted">Top Courses in "Python"</small>
              </h3>
            <div class="card-deck" >
                  
                    <div class="card mx-1 ">
                        <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>
                      <img class="card-img-top h-50"    src="images/pyboot.jpg" alt="Card image cap">
                      <div class="card-body px-2">
                        <a href="pyboot.php"><h6>Python Bootcamp 2022</h6></a>
                        <p class="card-text" style="font-size: 11px;">Covers Everything that you need to Start Building Projects...</p>
                        <p class="card-text"><small class="text-muted">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half text-warning"></i>
                          4.5 (18,330)</small>
                          <span class="d-block"></span>
                          <span class="float-right"> 
                            <small style="text-decoration: line-through;" class="text-muted">
                              (₹1999)</small>₹0.00 </span>
                              
                          </p>
                      </div>
                    </div>

                  
                    <div class="card mx-1 ">
                        <img class="card-img-top h-50"    src="images/pybible.png" alt="Card image cap">
                        <div class="card-body px-2">
                          <a href="#"><h6>The Python Bible</h6></a>
                          <p class="card-text" style="font-size: 11px;">Covers Logic and data structures, Python functions, Object-oriented programming, Running Python scripts...</p>
                          <p class="card-text"><small class="text-muted">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half text-warning"></i>
                            4.5 (12,450)</small>
                            <span class="d-block"></span>
                            <span class="float-right"> 
                              <small style="text-decoration: line-through;" class="text-muted">
                                (₹1599)</small>₹0.00 </span>
                            
                            </p>
                        </div>
                      </div>
                      
             
                      <div class="card mx-1 ">
                          <img class="card-img-top h-50"    src="images/pyfund.png" alt="Card image cap">
                          <div class="card-body px-2">
                            <a href="#"><h6>Python Fundamentals</h6></a>
                            <p class="card-text" style="font-size: 11px;">Covers the Major Python Topics Strings and Collections, Modularity, Objects, Handling errors, Iterables, Class...</p>
                            <p class="card-text"><small class="text-muted">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                              4.0 (10,680)</small>
                              <span class="d-block"></span>
                              <span class="float-right"> 
                                <small style="text-decoration: line-through;" class="text-muted">
                                  (₹1599)</small>₹0.00 </span>
                              
                              </p>
                          </div>
                        </div>
    
                      
                        <div class="card mx-1 ">
                            <img class="card-img-top h-50"    src="images/py101.jpg" alt="Card image cap">
                            <div class="card-body px-2">
                              <a href="#"><h6>Python 101</h6></a>
                              <p class="card-text" style="font-size: 11px;">Covers Python basics, Python Standard Library, Python packaging and distribution...</p>
                              <p class="card-text"><small class="text-muted">
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                4.0 (17,370)</small>
                                <span class="d-block"></span>
                                <span class="float-right"> 
                                  <small style="text-decoration: line-through;" class="text-muted">
                                    (₹2599)</small>₹0.00 </span>
                                
                                </p>
                            </div>
                          </div>
                                   
                    
                      
                          <div class="card mx-1 ">
                            <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>
                              <img class="card-img-top h-50"    src="images/pygoogle.jpg" alt="Card image cap">
                              <div class="card-body px-2">
                                <a href="#"><h6>Google IT Automation with Python</h6></a>
                                <p class="card-text" style="font-size: 11px;">Course Teaches you How to Program with Python and How to Use Python to Automate System Administration Tasks...</p>
                                <p class="card-text"><small class="text-muted">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half text-warning"></i>
                                  4.5 (20,980)</small>
                                  <span class="d-block"></span>
                                  <span class="float-right"> 
                                    <small style="text-decoration: line-through;" class="text-muted">
                                      (₹2999)</small>₹0.00 </span>
                                  
                                  </p>
                              </div>
                            </div>
                   
                  </div>



                  
       </div>




       <div id ="webdes"></div>
       <div class="container mt-5" >
           <h3>
                <small class="text-muted">Top Courses in "Web Design"</small>
              </h3>
            <div class="card-deck" >
                  
                    <div class="card mx-1 ">
                      <img class="card-img-top h-50"    src="images/webdevb.jpeg" alt="Card image cap">
                      <div class="card-body px-2">
                        <a href="#"><h6>Basics of Web Development</h6></a>
                        <p class="card-text" style="font-size: 11px;">Covers HTML5, CSS3 and Javascript among other languages used to build websites...</p>
                        <p class="card-text"><small class="text-muted">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half text-warning"></i>
                          4.5 (18,330)</small>
                          <span class="d-block"></span>
                          <span class="float-right"> 
                            <small style="text-decoration: line-through;" class="text-muted">
                              (₹1999)</small>₹0.00 </span>
                              
                          </p>
                      </div>
                    </div>

                  
                    <div class="card mx-1 ">
                      <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>
                        <img class="card-img-top h-50"    src="images/webmak101.jpg" alt="Card image cap">
                        <div class="card-body px-2">
                          <a href="#"><h6>Web Making 101</h6></a>
                          <p class="card-text" style="font-size: 11px;">Covers HTML by guiding you through the process of making your first real website...</p>
                          <p class="card-text"><small class="text-muted">
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star text-warning"></i>
                              <i class="fas fa-star-half text-warning"></i>
                            4.5 (12,450)</small>
                            <span class="d-block"></span>
                            <span class="float-right"> 
                              <small style="text-decoration: line-through;" class="text-muted">
                                (₹1599)</small>₹0.00 </span>
                            
                            </p>
                        </div>
                      </div>
                      
             
                      <div class="card mx-1 ">
                        <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>
                          <img class="card-img-top h-50"    src="images/webdevboot.jpg" alt="Card image cap">
                          <div class="card-body px-2">
                            <a href="#"><h6>Web Development Bootcamp</h6></a>
                            <p class="card-text" style="font-size: 11px;">Covers HTML, CSS, JavaScript and then jQuery, NodeJS, Database, SQL, Github, MongoDB...</p>
                            <p class="card-text"><small class="text-muted">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                              4.0 (10,680)</small>
                              <span class="d-block"></span>
                              <span class="float-right"> 
                                <small style="text-decoration: line-through;" class="text-muted">
                                  (₹1599)</small>₹0.00 </span>
                              
                              </p>
                          </div>
                        </div>
    
                      
                        <div class="card mx-1 ">
                            <img class="card-img-top h-50"    src="images/webdest.jpg" alt="Card image cap">
                            <div class="card-body px-2">
                              <a href="#"><h6> Web Design Training Foundation</h6></a>
                              <p class="card-text" style="font-size: 11px;">Covers topics as HTML, graphics, CSS, web host, animations, e-commerce overview and internet search techniques...</p>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                  <i class="fas fa-star text-warning"></i>
                                4.0 (17,370)</small>
                                <span class="d-block"></span>
                                <span class="float-right"> 
                                  <small style="text-decoration: line-through;" class="text-muted">
                                    (₹2599)</small>₹0.00 </span>
                                
                                </p>
                            </div>
                          </div>
                                   
                    
                      
                          <div class="card mx-1 ">
                              <img class="card-img-top h-50"    src="images/dontfearweb.jpg" alt="Card image cap">
                              <div class="card-body px-2">
                                <a href="#"><h6>Dont Fear the Website</h6></a>
                                <p class="card-text" style="font-size: 11px;">Course work with CSS, HTML, PHP and more web design techniques...</p>
                                <p class="card-text"><small class="text-muted">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star-half text-warning"></i>
                                  4.5 (20,980)</small>
                                  <span class="d-block"></span>
                                  <span class="float-right"> 
                                    <small style="text-decoration: line-through;" class="text-muted">
                                      (₹2999)</small>₹0.00 </span>
                                  
                                  </p>
                              </div>
                            </div>
                   
                  </div>



                  
       </div>



       <div id ="cybersec"></div>
       <div class="container mt-5" >
          <h3>
               <small class="text-muted">Top Courses in "CyberSecurity"</small>
             </h3>

             <div class="row">
               <div class="col">
                  <a href="cybersec.php" class="btn btn-primary btn-block btn-lg">Find Certifications, Courses and More Here...</a>
               </div>
               
             </div>

      </div>


      

      <div class="container mt-5" >
          <h3>
               <small class="text-muted">Achieve Your Goals</small>
             </h3>

             <div class="row">
               <div class="col-md-4">
                      <figure class="figure">
                          <img src="images/exprog.jpg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Expand your programming knowledge</figcaption>
                        </figure>
                  </a>
               </div>
               <div class="col-md-4">
                      <figure class="figure">
                          <img src="images/dreams.jpg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Improve Your Lifestyle</figcaption>
                        </figure>
                  </a>
                </div>
               <div class="col-md-4">
                      <figure class="figure">
                          <img src="images/landtech.jpg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Land an exciting new tech job</figcaption>
                        </figure>
                  </a>
               </div>
             </div>

      </div>




      <div class="container mt-3" >
             <div class="row">
                <div class="col-md-3">

                        <figure class="figure">
                            <img src="images/curious.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">
                              Be curious To Learn Something New</figcaption>
                          </figure>
                    </a>
                 </div>

               <div class="col-md-3">
                      <figure class="figure">
                          <img src="images/worldup.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Be Updated With The World Affairs</figcaption>
                        </figure>
                  </a>
               </div>
               <div class="col-md-3">
                      <figure class="figure">
                          <img src="images/beboss.png" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Be Your Own Boss</figcaption>
                        </figure>
                  </a>
                </div>
               <div class="col-md-3">
                      <figure class="figure">
                          <img src="images/leisure.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Enjoy Stress Busting Leisure Time</figcaption>
                        </figure>
                  </a>
               </div>
             </div>

      </div>



      <div class="container mt-5" >
          <h3>
               <small class="text-muted">Featured Topics</small>
             </h3>

             <a href="#webdes" class="btn btn-light shadow mx-1">Web Design </a>
             <a href="#dataSci" class="btn btn-light shadow mx-1">Data Science</a>
             <a href="#py" class="btn btn-light shadow mx-1">Python</a>
             <a href="#cybersec" class="btn btn-light shadow mx-1">CyberSecurity</a>
             
      </div>


      <div class="container " style="margin-top: 120px;">
         <div class="row">
           <div class="col text-center border-right">
            <div class="col-8 offset-1">
             <h5>Try for 7 Days Without Sign Up</h5>
             <p class="lead" style="font-size: 15px;">We offer you demo access so you can try our LearningPandas
               e-learning platform without limits for 7 days</p>
            <a href="#" class="btn btn-lg btn-danger">LogOut</a>
            </div>
          </div>
          <div id ="cont"></div>
          <div class="col text-center">
              <div class="col-8 offset-1">
               <h5>We Solve Your Doubts</h5>
               <p class="lead" style="font-size: 15px;">Tell us your model and we will advise you on the best way to take advantage of our LearningPandas e-learning platform</p>
              <a href="contact.html" class="btn btn-lg btn-danger">Contact Now</a>
              </div>
            </div>


         </div>
      </div>



  
</div>
<nav class="nav mt-5 ml-3" style="font-size: 12px;">
    <span class="nav-link active text-muted font-weight-bold" >Languages</span>
    <span class="nav-link" >English</span>
    <a class="nav-link text-info" href="indexhindi.php">हिन्दी</a>
    <a class="nav-link text-info" href="indexarabic.php">عربي</a>
  </nav>
<hr/>

<div class="row" style="font-size: 12px;">
      <div class="col pl-5">
          <img src="images/pngegg.png" width="50px" class="mr-5" > <span>Copyright © 2021 LearningPandas, Inc.</span>
      </div>
      <div class="col">
          <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link text-info" href="#">About Us</a>
              </li>
            </ul>

      </div>
</div>


 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  
  </script>
  
</body>



</html>
