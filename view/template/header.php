
<?php 
    session_start();
    if(!isset($_SESSION['role'])){
        header('Location: landing.php');
    }
    $role = $_SESSION['role'];
    $username=$_SESSION['username'];
    
?>
<!DOCTYPE html>

<!--To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Bazra Motor</title>
        <!--how to add logo-->
        <link rel="icon" type="image/png" href="bazra.jpg"/>
    
         <!--Font Awesome--> 
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> 
         <!--Bootstrap core CSS--> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <!--Material Design Bootstrap--> 
        <link href="css/mdb.min.css" rel="stylesheet">
         <!--Your custom styles (optional)--> 
        <link href="css/style.css" rel="stylesheet">
        <style>
            body{
                background-color: white;
                /*color: white;*/
            }
            
        .navbar{
               padding-top: 35px;
               padding-bottom:35px; 
               
            }
        .navbar .nav-item{
                margin-right: 10px;
                color: black;
          
            }
        .navbar .nav-link{
                padding-right:20px !important;
                padding-left: 20px !important;
                color: black;
            }
                   .active{
                /*background: #e65100;*/
                background: #ffc107 !important;
                border-color: black;
                border-radius: 4px;
            }
            .active .nav-link{
                 color: black !important;
            }
            div.img {
                margin: 20px;
                border: 10px solid #ccc;
                float: left;
                width: 150px;
                margin-top: 50px;

            }
            div.img2 {
                margin: 1px;

                float: left;
                width: 300px;
                margin-top: 50px;
            }
            div.img:hover {
                border: 1px solid #777;
            }

            div.img img {
                width: 100%;
                height: auto;
            }

            div.desc {
                padding: 15px;
                text-align: center;
                border: 1px solid #ccc;
            }

            .button {
            background-color:lightslategray;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .grant{
          widith:100;
          height:150;
          margin-left: 400px;
          margin-right: 400px;
          padding: 100px;
      }
      .upload{
             
           alignment-adjust: central;
           /*margin: 0px 40px 60px 20px;*/
           padding: 30px;
      }
      .logo-img{
          width: 50px;
          height: 50px;
          border-radius: 100%;
      }
/*      img {
    border-radius: 50%;
}*/

     
        </style>
    </head>
    
    <body>
            <nav class="mb-1 navbar navbar-expand-lg navbar-light cloudy-knoxville-gradient px-4">
                <img src="./bazra.jpg"  class="d-inline-block align-top mr-2 logo-img"
                  alt="bazra motors logo">
                  <!-- <a href="./chatlogin.php" class="btn btn-amber">Chat Here</a> -->
                <a style="color: #ffc107;"class="navbar-brand text-dark" href="#"><h3><b>Bazra Motors</b></h3></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                 <a href="./chatlogin.php" class="btn btn-amber">Chat Here</a> 
              </button>
              <div class="collapse navbar-collapse text-dark" id="navbarSupportedContent-333">
                <ul class="navbar-nav ml-auto">
                
                     
                   <li class="nav-item <?php if($active=="home") echo "active"?>">
                      <a class="nav-link text-dark" href="home.php">Home
                      <span class="sr-only">(current)</span>
                      </a>
                  </li>
                   <!-- <li class="nav-item <?php if($active=="chatlogin") echo "active"?>">
                      <a class="nav-link text-dark" href="chatlogin.php">Chat
                      <span class="sr-only">(current)</span>
                      </a>
                  </li> 
                 
                   -->
                  <!-- <li class="nav-item <?php if($active=="dashboard") echo "active"?>">
                      <a class="nav-link text-dark" href="dashboard.php">User Dashboard
                      <span class="sr-only">(current)</span>
                      </a>
                  </li> -->
                   


                 <?php if($role == "motor department" ){ ?>
                    <li class="nav-item <?php if($active=="motor") echo "active"?>">
                      <a class="nav-link text-dark" href="motordis.php"> Manufacturing Post</a>
                  </li>

                 <?php } ?>
                  <?php if($role == "marketing"){ ?>
                  <li class="nav-item <?php if($active=="marketing") echo "active"?>">
                      <a class="nav-link text-dark" href="marketdis.php">marketing post</a>
                  </li>
                  
                   <?php } ?>
                  
                  <?php if($role == "Import Export" ){ ?>
                  <li class="nav-item <?php if($active=="IE") echo "active"?>">
                      <a class="nav-link text-dark" href="iedis.php">IE post</a>
                  </li>

                 <?php } ?>
                  <?php if($role == "It department"){ ?>
                  <li class="nav-item <?php if($active=="IT") echo "active"?>">
                      <a class="nav-link text-dark" href="itdis.php">IT post</a>
                  </li>
                 
                   <?php } ?>
                  <?php if($role == "Import Export"){ ?>
                  <li class="nav-item <?php if($active=="ieupload") echo "active"?>">
                      <a class="nav-link text-dark" href="ieupload.php"> upload</a>
                  </li>
                  
                 
                   <?php } ?>
                  <?php if($role == "It department"){ ?>
                  <li class="nav-item <?php if($active=="itupload") echo "active"?>">
                      <a class="nav-link text-dark" href="itupload.php"> upload</a>
                  </li>
                 
                  
                  
                   <?php } ?>
                  <?php if($role == "motor department"){ ?>
                  <li class="nav-item <?php if($active=="motorupload") echo "active"?>">
                      <a class="nav-link text-dark" href="motorupload.php">upload</a>
                  </li>
                    
                   <?php } ?>
                  <?php if($role == "marketing"){ ?>
                  <li class="nav-item <?php if($active=="marketupload") echo "active"?>">
                      <a class="nav-link text-dark" href="marketupload.php">upload</a>
                  </li>

                  
                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="status") echo "active"?>">
                      <a class="nav-link text-dark" href="status.php">Insert File</a>
                  </li>
                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="statusdis") echo "active"?>">
                      <a class="nav-link text-dark" href="statusdis.php">ShowPayments</a>
                  </li>


                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="letter") echo "active"?>">
                      <a class="nav-link text-dark" href="ref.php">Letter Upload</a>
                  </li>
                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="letterdis") echo "active"?>">
                      <a class="nav-link text-dark" href="letterdis.php">Letters</a>
                  </li>
                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="milestone") echo "active"?>">
                      <a class="nav-link text-dark" href="milestone.php">milestone</a>
                  </li>

                  <?php } ?>
                  <?php if($role == "admin"){ ?>
                  <li class="nav-item <?php if($active=="milestone") echo "active"?>">
                      <a class="nav-link text-dark" href="milestonedis.php">milestone display</a>
                  </li>




                  
                  
                  
                 <?php } ?>
                 <!-- <li class="nav-item <?php if($active=="upload") echo "active"?>">
                      <a class="nav-link text-dark" href="upload.php">Upload</a>
                  </li> -->
                  
                 
               
                  
                  <li class="nav-item dropdown">
                     
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                       <i class="fas fa-user"></i>
                       
                        <?php echo $username; ?>
                    </a>
                      
                           
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                      aria-labelledby="navbarDropdownMenuLink-333">
                        <!--<a class="dropdown-item"style="margin-left:10px;" href="setting.php">Signed in as</a>--> 
                     
                      <a class="dropdown-item" href="setting.php">Change Password</a>
                      <a class="dropdown-item" href="logout.php">logout</a>
                      
                    </div>
                  </li>
<!--                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>-->
      </li>



                </ul>
                
              </div>
            </nav>

