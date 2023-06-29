<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bar.css">
    

    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: sans-serif;
        }   
        body{
           min-height: 100vh;
           background: antiquewhite;
        }
        .container{
           position: absolute;
           top: 50%;
           left: 50%;
           display: flex;
           transform: translate(-50%, -50%);
        }
        .tooltip{
           position: relative;
        }
        h1{
           color: brown;
           font-weight: 900;
           text-align: center;
           text-transform: uppercase;
           letter-spacing: 3px;
           margin: 30px;
           cursor: pointer;
           transition: 0.3s;
        }
        h2{
           color: brown;
           font-weight: 900;
           text-transform: uppercase;
           letter-spacing: 3px;
           margin: 30px;
           cursor: pointer;
           transition: 0.3s;
        }
        h2:hover{
           opacity: 0.7;
        }
        .content{
           width: 400px;
           background: aliceblue;
           padding: 20px;
           position: absolute;
           top: -65%;
           left: 50%;
           transform: translate(-50%, -50%);
           border-radius: 5px;
           visibility: hidden;
           opacity: 0;
           transition: 0.5s;
        }
        .content h3{
           text-transform: uppercase;
           font-weight: 900;
           margin-bottom: 10px;
        }
        .content p{
           line-height: 1.4;
        }
        .content::before{
           content: "";
           position: absolute;
           width: 25px;
           height: 25px;
           background: aliceblue;
           bottom: 0;
           left: 50%;
           transform: rotate(45deg) translateY(50%);
        }
        h2:hover + .content{
           visibility: visible;
           opacity: 1;
        }

        .form{
            widith:70%;
            float:left;
            background-color:#fff;
            font-family:serif;
            padding-left:12s0px;
            display:block;
        }
        span{
            font-weight:700
        }
        .form h2{
            text-align:center;
            text-shadow:2px 2px 2px #cfcfcf
        }
       </style>
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

 

    <h1>SKILLS</h1><hr>
    <div class="nine">
    <div class="container" >
        <div class="tooltip" style="padding-top:50px;">
            <h2>Computer Programming Skills</h2>
            <div class="content">
                <h3>Computer Programming Skills</h3>
                <p>
                    I specialise in C++, C and Python Programming languages.
                </p>
            </div>
        </div>

        <div class="tooltip" style="padding-top:50px;">
            <h2>HTML/CSS Skills</h2>
            <div class="content">
                <h3>HTML/CSS/JVASCRIPT Skills</h3>
                <p>
                    I mainly use these skills for web designing and development.
                </p>
            </div>
        </div>

        <div class="tooltip" style="padding-top:50px;">
            <h2>Interpersonal Skills</h2>
            <div class="content">
                <h3>Interpersonal Skills</h3>
                <p>
                    These skills help me to facilitate interaction and communication
                    with my fellow developers, potential employees and clients.
                </p>
            </div>
        </div>

        <div class="tooltip" style="padding-top:50px;">
            <h2>Analytical Skills</h2>
            <div class="content">
                <h3>Analytical Skills</h3>
                <p>
                These are data analysis, logical thinking, research, creativity, 
                and communication which I use in various critical situations.
                </p>
            </div>
        </div>

    </div>
</div>

<section> 
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);

    $dbyanga=mysqli_select_db($conn,"portfolio");
    ?>
    <?php
    $query="SELECT * FROM skills";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)) {
    ?>
    <div class="form">
        <h4>-------------SKILLS DETAILS----------------S</h4>
        <span>SKILLS ID:</span><br><?php echo $row['ID']; ?><br>
        <span>SKILLS NAME:</span><br><?php echo $row['SKILL_NAME']; ?><br>
        <span>SKILLS PROFICIENCY:</span><br><?php echo $row['SKILL_PROFICIENCY']; ?><br>
    </div>   
        
    
    <?php
    }
?>

    </section>

<div class="ten">
       
       <div style="width: 400px; height: 400px; margin-left: 450px; margin-top: 100px;" class="skill">
        <h3>SKILL PROFICIENCY</h6>
        <li><h3>Computer Programming Skills</h3>
         <span class="bar"><span class="prg"></span></span>   
        </li>

        <li><h3>HTML/CSS/JAVASCRIPT Skills</h3>
            <span class="bar"><span class="HCJ"></span></span>   
           </li>

           <li><h3>Interpersonal Skills</h3>
            <span class="bar"><span class="inter"></span></span>   
           </li>

           <li><h3>Analytical Skills</h3>
            <span class="bar"><span class="ana"></span></span>   
           </li>
    </div>
    

    </div>

 
</body>
</html>