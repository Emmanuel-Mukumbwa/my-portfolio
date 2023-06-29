<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form{
            widith:70%;
            float:left;
            background-color:#fff;
            font-family:serif;
            padding-left:30px;
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

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn=mysqli_connect($servername,$username,$password);

    $dbyanga=mysqli_select_db($conn,"portfolio");
    ?>
    <?php
    $query="SELECT * FROM projects";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result)) {
    ?>
    <div class="form">
        <h2>-PROJECT SDETAILS-</h2>
        <span>PROJECT ID:</span><br><?php echo $row['ID']; ?><br>
        <span>PROJECT NAME:</span><br><?php echo $row['PROJECT_NAME']; ?><br>
    </div>   
        
    
    <?php
    }
?>

    <div class="seven">
        <h3 style="margin-bottom:30px;">PROJECTS</h3>
        
<div class="project">
    <img src="myphoto1.jpg">
    </div>
    </div>
	<button data-modal-target="#modal">Click to Open Project Details</Details></button>
    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="title">Featured Project</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            The featured project is a simple static personal webpage.
            <br> the webpage has a logo, navigation bar linking to
            other web<br> pages, a header, a paragraph and some buttons.<br> 
            To view the project click the link below.<br>
            <a href="project1.php" class="P">LINK: FEATURED PROJECT</a>

        </div>
    </div>
    <div id="overay"></div>

    </div>
    
    <script>
        const openModalButtons = document.querySelectorAll('[data-modal-target]')
        const closeModalButtons = document.querySelectorAll('[data-close-button]')
        const overlay = document.getElementById('overlay')

        openModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.querySelector(button.dataset.modalTarget)
                openModal(modal)
            })
        })

        closeModalButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.modal')
                closeModal(modal)
            })
        })

        function openModal(modal){
            if (modal == null) return
            modal.classList.add('active')
            overlay.classList.add('active')
        }

        
        function closeModal(modal){
            if (modal == null) return
            modal.classList.remove('active')
            overlay.classList.remove('active')
        }
    </script>

</body>
</html>
