<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style1.css">
    <script src="script1.js" type="text/javascript"></script>
</head>
<body>
    <ul>
    <li><a href="index.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="forrmm.php">CONTACT</a></li>
        <li><a href="skills.php">SKILLS</a></li>
        <li><a href="project.php">PROJECTS</a></li>

    </ul>

     <div id="overlay">
        <form>
            <h1>contact us</h1>
    
            <label for="name">Name:</label>
            <input id="name"  type="text" placeholder="your name" required>
        

            <label for="email">E-mail:</label>
            <input id="email" type="text" placeholder="your E-mail" required>
            

            <label for="message">Message:</label>
            <textarea id="message" placeholder="your message" rows="6" required></textarea>
            

            <div class="center">
                <button class="btn" type="button" onclick="myFunction()">submit</button>
                <p id="p01" style="color: red;"></p>
            </div>
        </form>   
        
        <p style="text-align: center;"><i>THANK YOU FOR CONTACTING US</i></p>

    </div>

    <div>

        <h2>LOCATION: @Mzuzu University, Mzuzu, Malawi.</h2>
        <div class="contact-map" style=" margin-top: 20px;margin-left:150px;margin-bottom:100px;width: 1000px;height: 400px;">
        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=33.0918,-13.6341,36.0463,
        -9.3571&amp;layer=mapnik&amp;marker=11.4644,34.0209" 
        width="100%" height="400px" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    

</body>

</html>