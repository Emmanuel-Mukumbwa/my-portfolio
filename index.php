<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <script src="script.js" type="text/javascript"></script>

</head>
<body>
      <h1 class="heading">Emmanuel Mukumbwa</h1>

    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="forrmm.php">CONTACT</a></li>
        <li><a href="skills.php">SKILLS</a></li>
        <li><a href="project.php">PROJECTS</a></li>
    </ul><hr>
   

    <div class="fist">
    <div class="box">
        <img src="myphoto.jpg">
    </div>
    </div>

    <div class="second">
        <h1>Hey, I'm <br> <span>Emmanuel aRelic Mukumbwa</span></h1>
        <p style="margin-top: 70px;">I am currently an upgrading student at Mzuzu Universuty studying bachelor of science <br> in 
            Information and Communication Technology. In 2021 I graduated from the Malawi <br> University of Business 
            and Applied Sciences with an Advanced Diploma in Computing <br> and Information  Systems and I emjoy using 
            my skills to provide technological services<br> to different groups of people.
        </p><hr>
    </div>


    <div class="third">
        <h3 style="margin-bottom:30px;">PROJECTS</h3><hr>

        <div class="project">
            <img name="slide" width="400" height="300">
        </div>
    </div>

    <div class="fourth">
        <h3>SKILLS, TOOLS, & TECHNOLOGIES</h3><hr>

<div style="padding-top:50px; margin-left:35px;">

<div style="width: 200px; float: left; height:300px; margin: 10px; background: ; margin-left:0px;">

<h3 style="margin-left:0px; ">SKILLS</h3><hr>

<p class="ull">Computer Programming Skills</p>
<p class="ull">HTML/CSS Skills</p>
<p class="ull">Interpersonal Skills</p>
<p class="ull">Analytical Skills</p>
<p class="ull">Testing and Debuging skills</p>

</div>

<div style="width: 200px; float: left; height:300px; margin: 10px; background: ; margin-left:0px;">
<h3 style="margin-left:0px;">TOOLS</h3><hr>

<p class="ull">Github</p>
<p class="ull">Sublime Text</p>
<p class="ull">Visual Studio Code</p>
<p class="ull">Notepad++</p>

</div>

<div style="width: 200px; float: left; height:300px; margin: 10px; background: ; margin-left:0px;">
<h3 style="margin-left:0px;">TECHNOLOGIES</h3><hr>

<p class="ull">Browsers</p>
<p class="ull">HTML & CSS</p>
<p class="ull">Programming Languages</p>
<p class="ull">Protocols</p>

</div>

</div>

    </div>

    <div class="firth">
     
        <div id="overlay">
            <form onsubmit="event.preventDefault(); validateform()" autocomplete="on">
                <h1>contact us</h1>
        
                <label for="name">name:</label>
                <input type="text" id="name" placeholder="your name" required>
    
                <label for="email">email:</label>
                <input type="text" id="email" placeholder="your email" required>
    
                <label for="message">message:</label>
                <textarea id="message" placeholder="your message" rows="6" required></textarea>
    
                <div class="center">
                    <input type="submit" value="send message" >
                    <p id="success"></p>
                </div>
            </form>    
        </div>    

    </div>

   <div class="six">

    <p>Greetings:</p><hr>

    <button onclick="myFunction()">CLICK ME</button><hr>
    
    <p id="demo"></p><hr>

   </div>

<div class="footer1" style="display:flex ; position: bottom;">
 <footer>
    
      <div>
        <img src="15.PNG" class="icon" alt="icon">
        <span>Phone</span>
        <a href="">0882470666</a>
      </div>
      <div>
        <img src="12.jfif" class="icon" alt="icon">
        <span>WhatsApp</span>
        <a href="">0992374652</a>
      </div>
      <div  style="display: inlineblock;">
        <img src="GMAIL.PNG" class="icons" alt="icon">
        <span>Email</span>
        <a href="">emukumbwa2419@gmail.com</a>
      </div>
      <div  style="display: inlineblock;">
        <img src="FB.PNG" class="icons" alt="icon">
        <span>Social</span>
        <a href="#">Emmanuel ARelic snr.</a>
      </div>
    </div>
  </footer>
</div>

    


<script> 
  var i = 0; //start print
  var images = [];
  var time = 3000;

  //image list
  images[0] = 'image1.jpg';
  images[1] = 'image2.jpg';
  images[2] = 'image3.jpg';

  //change image
  function changeimg(){
    document.slide.src = images[i];

    if(i<images.length - 1){
     i++;
   } else {
        i = 0;
      }
     
     setTimeout("changeimg()", time);
  } 

  window.onload = changeimg;


</script>
</body>
</html>