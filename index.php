<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/jpg" href="assets/logo1.png" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="http://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title> Bandabtai</title>
	<link rel="shortcut icon" type="image/jpg" href="assets/logo1.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<meta name="description" content="In need of any item or items,worry no more,at bandabtai we supply anything
     you're in need of ,from school stationery to building materials and all other" />
	<meta name="keywords" content="bandabati,supplies" />
	<meta http-equiv="content-language" content="en-uk">
    <script type="text/javascript">
    /*Designed by CodingTuting.Com*/
$(document).ready(function(){
    
    $(window).scroll(function(){
        if($(this).scrollTop() >= 500) {
            $("#gotop").fadeIn();
      
            $("#top-btn").click(function(){
                $(window).scrollTop(0);
            });
         }
         else {
             $("#gotop").fadeOut();
         }    
    });
});

function menuBtnFunction(menuBtn) {
    menuBtn.classList.toggle("active");
    $(".mainMenu").toggleClass("active");
    $(".mainMenu a").toggleClass("active");
}
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
</head>
<body>
<header id="topHeader">
        <ul id="topInfo">
            <li>+254 717150025</li>
            <li>bandabtailimited@gmail.com</li>
        </ul>
        
        <nav>
            <span class="logo">Bandabtai</span>
            <div class="menu-btn-3" onclick="menuBtnFunction(this)">
                <span></span>
            </div>
            <div class="mainMenu">
                <a href=""><span>Technology</span></a>
                <a href=""><span>Service</span></a>
                <a href=""><span>Portfolio</span></a>
                <a href=""><span>About Us</span></a>
                <a href=""><span>Career</span></a>
                <a href=""><span>Blog</span></a>
                <a href="">Work With Us</a>
            </div class="mainMenu">
        </nav>
    </header>

    <section id="intro">
        <div id="intro-info">
            <div>
                <h1>Limited General Supplies company</h1>
                <div id="intro-tag-btn">
                    <span>Quality and reliable service at best prices.</span>
                    <a href="" class="brand-btn">Let's Talk</a>
                </div>
            </div>
        </div>

        <div id="development-img">
            <img src="assets/logo3.png" width="100%" height="50%"/>
        </div>
    </section>

    <section id="delivery">
        <h1 class="sec-heading">Delivering Experience Since 2015</h1>
        <div class="col-5 delivery-img">
            <img src="https://www.dropbox.com/s/ipx91osglyczpdt/delivery_experience.svg?raw=1" alt="Productivity Delivering Experience" title="Delivering Experience Since 2009"/>
        </div>
        <div class="col-7">
            <h2>Accelerating your delivery with bandabtai</h2>
            <p>
               We supply a range of general supplies that you need 
               for your businesss.We offer a first class supply 
               service<br/><br/> Our main aim is to provide quality General 
               supplies in agriculture,schools,offices,hospitals and many other.
            </p>
            <div class="btn-footer">
                <a href="" class="brand-btn">Contact Us</a>
            </div>
        </div>
    </section>

    <section id="services">
        <h1 class="sec-heading">Our Services</h1>
        <ul>
            <li>
                <div>
                    <a href="">
                    <i class="fas fa-book"></i><span>Stationeries</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                    <i class="fas fa-tools"></i><span>Building materials</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                    <i class="fas fa-hamburger"></i></i><span>Food and beverages</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                    <i class="fas fa-tv"></i><span>Home appliances</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                    <i class="fas fa-user-tie"></i><span>Clothes and footware</span>
                    </a>
                </div>
            </li>
            <li>
                <div>
                    <a href="">
                        <i class="fas fa-chair"></i><span>Furnitures</span>
                    </a>
                </div>
            </li>
        </ul>
        
        <div id="service-footer">
            <a href="" class="brand-btn">View All Service</a>
        </div>
    </section>
    
    <section id="success-story">
        <h1 class="sec-heading">Our Success Stories</h1> 
        
        <div class="slider">
            <div class="col-6 slide-text">
                <div>
                    <h2>Mission</h2>
                    <p>
                    To meet and deliver quality products and services to our customers
                     and ensuring customer satisfaction
                    </p>
                    <h2>Vission</h2>
                    <p>
                   To offer quality products and services to our customers at the Best 
                   prices possible.Commited to be part of our customers success.
                    </p>
                    <div class="popup" onclick="myFunction()">
                    Contact Us
                    <span class="popuptext" id="myPopup">
                        PHONE: <a href="tel: 254717150025"><font color="red">0717150025/0727287028</font></a><br>
                        EMAIL: <a href="mailto:bandabtailimited@gmail.com"><font color="red">bandabtailimited@gmail.com </font></a><br>
                        
                    </span>
                    </div>
                </div>
            </div>
            <div class="col-6 slide-img">
                <img src="https://www.dropbox.com/s/ipx91osglyczpdt/delivery_experience.svg?raw=1" alt="World Travel App Development" title="World Travel Protection"/>
            </div>
        </div>
    </section>
    <section id="highlights">
        <h1 class="sec-heading">Company Highlights</h1> 
    
        <div class="slider">
            <div class="col-6 slide-text">
                <div>
                    <h2>Core values</h2>
                    <p>
                      INTEGRITY:  To be honest and transparent to our customers.<br><BR>
                      PROMISE TO CUSTOMERS: Creating a great customer experience begins with 
                      staying true to the words we speak and the bonds we make. <br><br>
                      QUALITY: Companies are judged by the craftsmanship of their 
                      products and services, so we maintain the highest standards possible. 
                </p>
                    <a href="" class="brand-btn">See More</a>
                </div>
            </div>
            <div class="col-6 slide-img">
                <img src="https://www.dropbox.com/s/vnkswx20c0dg5ta/analyzing.jpg?raw=1" alt="Team Work in Los Angeles" title="Company Team Work"/>
            </div> 
        </div>
    </section>
  
    <section id="partners" class="brand-logos">
        <h1 class="sec-heading">Our Partners</h1> 
        <div>
            <a><img src="https://www.dropbox.com/s/mk5ca04seizpf8l/aws.svg?raw=1" alt="Work with AWS" title="Our Work"></a>
            <a><img src="https://www.dropbox.com/s/r9utt5nj9k9m1t8/Dell.png?raw=1" alt="Dell" title="Work with Dell"></a>
            <a><img src="https://www.dropbox.com/s/umw9g0zgm1ecfvn/Intel.png?raw=1" alt="intel" title="Work with intell"></a>
            <a><img src="https://www.dropbox.com/s/x0hrha2dosey99z/ibm.png?raw=1" alt="IBM" title="Work with IBM"></a>
            <a><img src="https://www.dropbox.com/s/ekzu1wcki6jziay/Microsoft.svg?raw=1" alt="Microsoft" title="Work with Microsoft"></a>
            <a><img src="https://www.dropbox.com/s/lvl5cp14i3v0wgi/Nasscom.png?raw=1" alt="Nasscom" title="Work with Nasscom"></a>
            <a><img src="https://www.dropbox.com/s/h66k9jaaknxaum4/Samsung.png?raw=1" alt="Samsung" title="Work with Samsung"></a>
            <a><img src="https://www.dropbox.com/s/86cbtf78khj0q9z/Nvidia.png?raw=1" alt="Nvidia" title="Work with Nvidia"></a>            </div>
    </section>
    
    <footer>
       <div>
            <span class="logo">Bandabtai</span>
       </div>

       <div class="row">
            <div class="col-3">
                <span class="footer-cat">Solution</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Service delivery</span></a></li>
                    <li><a href=""><span>Contracts</span></a></li>
                    <li><a href=""><span>Wholesale</span></a></li>
                </ul>
            </div>
            <div class="col-3">
                <span class="footer-cat">Industries</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Healthcare</span></a></li>
                    <li><a href=""><span>Education</span></a></li>
                    <li><a href=""><span>Agriculture</span></a></li>
                    <li><a href=""><span>Construction</span></a></li>
                    <li><a href=""><span>Furnitures</span></a></li>
                </ul>
            </div>
            <div class="col-3">
                <span class="footer-cat">Quick Links</span>
                <ul class="footer-cat-links">
                    <li><a href=""><span>Reviews</span></a></li>
                    <li><a href=""><span>Terms & Condition</span></a></li>
                    <li><a href=""><span>Disclaimer</span></a></li>
                    <li><a href=""><span>Site Map</span></a></li>
                </ul>
            </div>
            <div class="col-3" id="newsletter">
                <span class="footer-cat">Stay Connected</span>
                <form id="subscribe">
                    <input type="email" id="subscriber-email" placeholder="Enter Email Address"/>
                    <input type="submit" value="Subscribe" id="btn-scribe"/>
                </form>
                
                <div class="social-links social-2">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-tumblr"></i></a>
                    <a href=""><i class="fab fa-reddit-alien"></i></a>
                </div>

                <div id="address">
                    <span class="footer-cat">Office Location</span>
                    <ul>
                        <li>
                            <i class="far fa-building"></i>
                            <div>Eldoret<br/>
                            kvda plaza,uganda road, Eldoret</div>
                        </li>
                        <li>
                            <i class="fas fa-gopuram"></i>
                            <div>Eldoret<br/>
                            kvda plaza,uganda road, Eldoret</div>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="social-links social-1 col-6">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-tumblr"></i></a>
                <a href=""><i class="fab fa-reddit-alien"></i></a>
            </div>
       </div>
       <div id="copyright">
           &copy; All Rights Reserved 2015-2022
       </div>
       <div id="owner">
           <span>
               Designed by <a href="https://eazistey.co.ke/tenaitech">TENAITECH</a>
           </span>
       </div>
       <a href="#topHeader" id="gotop">Top</a>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="ScriptIT.js"></script>
</body>
</html>