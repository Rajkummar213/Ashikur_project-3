<?php
include_once "./database/env.php";

$query = "SELECT * FROM banners LIMIT 1";
$result = mysqli_query($conn, $query);
$banner = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASHIKUR PROJECT-2</title>
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/responsive.css">

</head>
<body>
    <!-- NAVBAR STARTS -->
     <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="./IMG/ASHIKUR.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">PROJECTS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">BLOGES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">CONTACT</a>
                  </li>
               
                </ul>
                
              </div>
            </div>
          </nav>
     </header>
    <!-- NAVBAR END -->

     <!-- BRNNER STARTS -->
     <section id="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="bannertext col-lg-6 order-2 order-lg-1">
            <h4><?= $banner['heading'] ??null  ?></h4>
           <h2><?= $banner['sub_heading']  ??null ?></h2>
           <p><?= $banner['detalis'] ??null   ?></p>



            
            <a href="#" class="btn btn-primary ">Lets talk
              <i><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 2L11 13M22 2C19.2663 9.81049 17.7337 14.1895 15 22L11 13M22 2L2 9L11 13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </i>
            </a>
            <a href="#" class="btn btn-outline">Download CV
              <i><img src="./IMG/icon1.png" alt="">
  
                  
              </i>
            </a>
            
            <div class="icon">
              <samp>Follow me:</samp>
              
            <a href="#"><i><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1921_68178)">
                <path d="M18.3334 10.0001C18.3348 11.0977 18.1187 12.1847 17.6975 13.1984C17.2764 14.212 16.6585 15.1321 15.8797 15.9055C15.1072 16.6766 14.1903 17.2879 13.1815 17.7045C12.1726 18.1211 11.0916 18.3348 10.0001 18.3334C5.39759 18.3334 1.66676 14.6026 1.66676 10.0001C1.66384 7.86333 2.48462 5.80765 3.95842 4.26051C4.73606 3.43992 5.67297 2.78665 6.71181 2.34066C7.75065 1.89468 8.86957 1.66537 10.0001 1.66676C11.0916 1.66534 12.1726 1.87904 13.1815 2.29564C14.1903 2.71223 15.1072 3.32356 15.8797 4.09467C16.6585 4.8681 17.2764 5.7882 17.6975 6.80182C18.1187 7.81543 18.3348 8.90246 18.3334 10.0001V10.0001Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M18.3334 9.99998C17.1175 9.99998 13.7634 9.54165 10.7613 10.8596C7.50004 12.2916 5.13879 14.5129 4.10962 15.8946" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6.875 2.27271C8.17917 3.47646 11.025 6.54104 12.0833 9.58354C13.1417 12.626 13.5333 16.3669 13.775 17.4315" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M1.73096 8.9583C3.30512 9.0533 7.47221 9.13872 10.1389 7.99997C12.8055 6.86122 15.1001 4.76663 15.8872 4.10205M2.29179 13.1721C3.02609 14.9495 4.35042 16.4197 6.04179 17.335" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M1.66676 10.0001C1.66384 7.86332 2.48462 5.80765 3.95842 4.2605M10.0001 1.66675C8.86957 1.66537 7.75065 1.89468 6.71181 2.34066C5.67297 2.78665 4.73606 3.43992 3.95842 4.2605M13.3334 2.36009C14.2824 2.77531 15.1459 3.36352 15.8797 4.09467C16.6585 4.8681 17.2764 5.7882 17.6975 6.80182C18.1187 7.81543 18.3348 8.90246 18.3334 10.0001C18.3334 11.0259 18.148 12.0088 17.8084 12.9168M10.0001 18.3334C11.0916 18.3348 12.1726 18.1211 13.1815 17.7045C14.1903 17.2879 15.1072 16.6766 15.8797 15.9055" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_1921_68178">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg></i></a>
            <a href="#"> <i><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1921_68189)">
                <path d="M18.3333 5.83341H12.5V4.16675H18.3333V5.83341ZM19.7717 14.1667C19.4033 15.2476 18.0808 16.6667 15.5208 16.6667C12.9592 16.6667 10.8842 15.2259 10.8842 11.9376C10.8842 8.67925 12.8217 7.00425 15.4392 7.00425C18.0075 7.00425 19.5758 8.48925 19.9183 10.6926C19.9833 11.1142 20.0092 11.6826 19.9975 12.4759H13.3083C13.4167 15.1517 16.2108 15.2359 17.1317 14.1667H19.7717ZM13.3667 10.8334H17.5042C17.4167 9.54425 16.5575 8.98425 15.44 8.98425C14.2183 8.98425 13.5425 9.62425 13.3667 10.8334ZM5.38833 16.6567H0V4.18425H5.79417C10.3575 4.25175 10.4442 8.72091 8.06083 9.93925C10.945 10.9892 11.0417 16.6567 5.38833 16.6567ZM2.5 9.16675H5.48667C7.57667 9.16675 7.90833 6.66675 5.22667 6.66675H2.5V9.16675ZM5.32583 11.6667H2.5V14.1801H5.28417C7.83 14.1801 7.67417 11.6667 5.32583 11.6667Z" fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_1921_68189">
                  <rect width="20" height="20" fill="white" />
                </clipPath>
              </defs>
            </svg></i></a>
            <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
              
            </div>
          </div>

          <div class="bannerimg col-lg-6 order-1 order-lg-2">
            <img src="./IMG/Group 209 (1).png" class="img-fluid" alt="">
          </div>

        </div>
      </div>
     </section>
     <!-- banner end --> 

     <!-- about starts -->
     <section id="about">
      <div class="container">
        <div class="row align-items-center">
          <div class="aboutimg col-lg-6">
           <img src="./IMG/Group 198 (1).png" class="img-fluid" alt="">
          </div>
          <div class="abouttext col-lg-6 position-relative">
            <h2>About Me</h2>
            <p>With 10 yevvars experience as a professional Web <br> developer, I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
            <a href="#" class="btn btn-outline">See More</a>
            <div class="position-absolute aboutimg1  d-none d-lg-block">
              <a href="#">
                <img src="./IMG/Ellipse 55.png" alt="">
              </a>
            </div>
          </div>
          
        </div>
      </div>
     </section>
     <!-- about end -->

     <!-- card starts -->
      <section id="card">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="cardcnt">
                <a href="#">
                  <img src="./IMG/Frame (1).png" alt=""> </a>
                  <h3>Pixel Perfect</h3>
                  <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
               
              </div>
            </div>
            <div class="col-lg-4">
              <div class="cardcnt">
                <a href="#">
                  <img src="./IMG/Frame (2).png" alt=""> </a>
                  <h3>High Quality</h3>
                  <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
               
              </div>
            </div>
            <div class="col-lg-4">
              <div class="cardcnt">
                <a href="#">
                  <img src="./IMG/frame(3).png" alt=""> </a>
                  <h3>Awesome Idea</h3>
                  <p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
               
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- card end -->

      <!-- branding starts -->
       <section id="branding">
        <div class="container">
          <div class="row align-items-center">
            <div class="branding-img col-lg-6">
             
                <a href="#">
                  <img src="./IMG/branding.png" class="img-fluid" alt=""></a>
              
            </div>
            <div class="col-lg-6  position-relative">
             <div class="branding-text">
              <h2>Branding</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet ornare id faucibus nunc fusce tellus scelerisque adipiscing lorem. Mollis tortor, mattis urna imperdiet.</p>
              <div class="position-relative btnwrapper"><a href="#" class="btn btn-outline">See Project</a>
                <img src="./IMG/digitalicon1.png" class="arrow position-absolute " alt="">
              </div> 

             </div>
             <div class="position-absolute aboutimg2  d-none d-lg-block">
              <a href="#">
                <img src="./IMG/Ellipse 56.png" alt="">
              </a>
            </div>
            </div>
          </div>
        </div>
       </section>
       <!-- branding end -->

       <!-- design starts -->
        <section id="design">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="row iconcnt">
                  <div class="col-lg-2 img">
                  <a href="#"> <img src="./IMG/Group 212.png" alt=""></a>
                </div>
                <div class="col-lg-4 ">
                  <h5>Website Design</h5>
                  <p>712 project</p>
                </div>
                
                </div>
                <div class="row iconcnt">
                  <div class="col-lg-2">
                  <a href="#"> <img src="./IMG/Group 230.png" alt=""></a>
                </div>
                <div class="col-lg-4">
                  <h5>Mobile App Design</h5>
                  <p>712 project</p>
                </div>
                
                </div>
                <div class="row iconcnt">
                  <div class="col-lg-2">
                  <a href="#"> <img src="./IMG/Group 215 (1).png" alt="">
                   
                  </a>
                </div>
                <div class="col-lg-4">
                  <h5>Brand Identity</h5>
                  <p>712 project</p>
                </div>
                
                </div>
              </div>
              <div class="col-lg-6">
                <div class="designtext">
                  <h2>What Do I Help?</h2>
                  <p>I will help you with finding a solution and solve your <br>problems. We use process desigv n to create digital <br> productes. Beside that also help their business.</p>
                </div>
                <div class="row justify-content-between">
                  <div class="col-lg-6 text">
                    <h4>250+</h4>
                  </div>
                  <di.v class="col-lg-6 text">
                    <h4>150+</h4>
                    <p>Happy Clients</p>
                  </di.v>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <!-- design end -->


         <!-- text starts -->
         <section id="text1">
<div class="container">
        <div class="cnt">
          <h2>My Work Experience</h2>
        </div>
      </div> 
    </section>
    <!-- end  -->

<!-- experienec starts -->
        <section id="experienec">
          <div class="container">
              <div class="timeline aqua">
                  <div class="row justify-content-between">
                      <div class="col-3 timelineYear">
                          <h3>New Man Service</h3>
                          <p>Sep 2019 - Aug 2020</p>
                      </div>
                      <div class="col-8 timelinecnt">
                        <h3>Visual Designer</h3>
                        <h3>New Man Service</h3>
                      
                      </div>
                  </div>
              </div>

              <div class="timeline aqua">
                  <div class="row justify-content-between ali">
                      <div class="col-3 timelineYear" >
                          <h3>New Man service</h3>
                          <p>Sep 2019 - Aug 2020</p>
                      </div>
                      <div class="col-8 timelinecnt">
                        <h3>UI/UX Designer</h3>
                        <p>A Visual designe design for a varaity of platforms which may includes internat and internet sites, games, movies and wareable. In short, they create the concept. </p>
                      
                      </div>
                  </div>
              </div>
              <div class="timeline yellow ">
                  <div class="row justify-content-between ali">
                      <div class="col-3 timelineYear" >
                          <h3>Global Solution</h3>
                          <p>Sep 2019 - Aug 2020</p>
                      </div>
                      <div class="col-8 timelinecnt">
                        <h3>Sr. Product Designer</h3>
                        <p>A Visual designe design for a varaity of platforms which may includes internat and internet sites, games, movies and wareable. In short, they create the concept. </p>
                      
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- experienec end -->

      <!-- expert starts -->
      <section id="expert">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-6 text">
              <h2>My Expert Areas</h2>
              <p>You can express yourself however you want and whenever you want, for free. You can customize a template or make your own from scratch, with an immersive library at your disposal. You can express yourself however you want and whenever you free. <br>You can customize a template or make your own from scratch, with an immersive library at your disposal.</p>
              <a href="#" class="btn btn-primary">Download CV <i><img src="./IMG/icon1.png" alt=""></i></a>
            </div>
            <div class="col-lg-5">
           <a href="#" class="btn btn-outline">Skills</a>
           <a href="">Education</a>
           <div class="row justify-content-between">
           <div class="col-lg-10 text">
            <h4>Figma</h4>
           </div>
           <div class="col-lg-2 ">
            <p>85%</p>
           </div>
           <img src="./IMG/Group 229.png" alt="">
          </div>
          <div class="row justify-content-between">
            <div class="col-lg-10 text">
             <h4>Photoshop</h4>
            </div>
            <div class="col-lg-2 ">
             <p>75%</p>
            </div>
            <img src="./IMG/i235.png" alt="">
           </div>
           <div class="row justify-content-between[[]]">
            <div class="col-lg-10 text">
             <h4>XD</h4>
            </div>
            <div class="col-lg-2 ">
             <p>80%</p>
            </div>
            <img src="./IMG/Group 227.png" alt="">
           </div>
           <div class="row justify-content-between">
            <div class="col-lg-10 text">
             <h4>Illustrator</h4>
            </div>
            <div class="col-lg-2">
             <p>70%</p>
            </div>
            <img src="./IMG/Group 226.png" alt="">
           </div>
           </div>
            </div>
          </div>
        </div>
      </section>
      <!-- expert end -->


      <!-- mysevices starts -->
       <section id="mysevices">
        <div class="container">
          <h2>My Sevices</h2>
          <p>Most common methods for designing websites that work well on <br> desktop is responsive and adaptive design</p>
        </div>
       </section>
      <!-- mysevices end -->
       <!-- des -->
        <section id="des">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="descnt">
                <img src="./IMG/Group 199.png" alt="">
                <h3>Creative Design</h3>
                <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development</p>
              </div>
              </div>
              <div class="col-lg-4">
                <div class="descnt1">
                  <img src="./IMG/icon4.png" alt="">
                  <h3>Creative Design</h3>
                  <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development</p>
                  
                </div>
              </div>
              <div class="col-lg-4">
                <div class="descnt">
                  <img src="./IMG/icon6.png" alt="">
                  <h3>Creative Design</h3>
                  <p>Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development</p>
                </div>
              </div>
            
          </div>
        </section>
        <!-- client starts-->
         <section id="client">
          <div class="container">
            <div class="row align-items-center">
              <div class="text">
                <h5>Valuable feedback from my client</h5>
                <p>Most common methods for designing websites that work well on desktop is <br> responsive and adaptive design</p>
              </div>
              <div class="col-lg-6 clientimg">
                <img src="./IMG/Group 203.png" class="img-fluid" alt="">

              </div>
              <div class="col-lg-6 clienttext">
                <p>“Awesome website! Easy to use and edit, it has a lot of options to design whatever you need, it is professional and fun. I was very successful creating my profile using designer which gave me unbelievable reach & appreciation.”</p>
                <h5>Albert Walkers</h5>
                <p>Vivaco Group</p>

              </div>
            </div>
          </div>
         </section>
        <!-- client end -->
         <!-- blog starts -->
          <section id="blog">
            <div class="container">
              <div class="row">
                <div class="blogtext">
                  <h3>
                    From My Blog Post
                  </h3>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                  <div class="col-lg-5 blogimg">
                    <img src="./IMG/7358641 1.png" alt="">

                  </div>
                  <div class="col-lg-7 blogtext1">
                    <p><i><img src="./IMG/simple-line-icons_calender.png" alt=""></i>02 June, 2022 <samp>John Smith</samp></p>
                    <h3>Diversification of digital <br> marketing stategies</h3>
                    <h5>Read More<i><img src="./IMG/Group 222.png" alt=""></i></h5>
                  </div>
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-lg-5 blogimg">
                      <img src="./IMG/Group 196.png" alt="">
  
                    </div>
                    <div class="col-lg-7 blogtext1">
                      <p><i><img src="./IMG/simple-line-icons_calender.png" alt=""></i>02 June, 2022<samp>John Smith</samp></p>
                      <h3>Diversification of digital <br> marketing stategies</h3>
                      <h5>Read More <i><img src="./IMG/Group 222.png" alt=""></i></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                  <div class="col-lg-5 blogimg">
                    <img src="./IMG/Group 195.png" alt="">

                  </div>
                  <div class="col-lg-7 blogtext1">
                    <p><i><img src="./IMG/simple-line-icons_calender.png" alt=""></i>02 June, 2022<samp>John Smith</samp></p>
                    <h3>Diversification of digital <br> marketing stategies</h3>
                    <h5>Read More<i><img src="./IMG/Group 222.png" alt=""></i></h5>
                  </div>
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-lg-5 blogimg">
                      <img src="./IMG/Group 197.png" alt="">
  
                    </div>
                    <div class="col-lg-7 blogtext1">
                      <p><i><img src="./IMG/simple-line-icons_calender.png" alt=""></i>02 June, 2022<samp>John Smith</samp></p>
                      <h3>Diversification of digital <br> marketing stategies</h3>
                      <h5>Read More<i><img src="./IMG/Group 222.png" alt=""></i></h5>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </section>
         <!-- blog end -->
          <!-- email starts -->
           <section id="email">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 text">
                  <p>Subscribe Now</p>
                  <h3>Get My Newsletter</h3>
                  <div class="r"><p>Get latest news, updates, tips and trics in your inbox<p></div>

                </div>
                <div class="col-lg-6 hero">
                  <input type="search" placeholder="Your email here">
                  <a href="#">send no</a>

                </div>
              </div>
            </div>
           </section>
          <!-- email end -->

           <!-- footers starts -->
            <section id="footers">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="footer1">
                      <img src="./IMG/ASHIKUR (1).png" alt="">
                      <p>Call</p>
                      <h5>+9984748473833</h5>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="footer2">
                      <h3>Let's work together</h3>
                      <p>You can express yourself however you want and <br> whenever you want, for free. You can customize a <br> template or make your own.</p>
                      <p class="e">Email:</p>
                      <h4>dfsush@gmail.com</h4>
                    </div>
                  </div>

                  <div class="col-lg-3">
                    <div class="footer3">
                      <a href="#" class="btn btn-primary">lets talk</a>
                      <h4>Follow Me:
                        <a href="#"><i class="fa-brands fa-github"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </section>
           <!-- footers end -->
     


    <script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>