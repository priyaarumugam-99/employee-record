<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
    <style>
        :root {
  --color-primary: #0f0f0f;
  --color-white: #110e0e;
  --color-black: #dd195b;
  --color-black-1: #dd195b;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
 
}

.logo {
  color: var(--color-white);
  font-size: 30px;
}

.logo span {
  color: var(--color-primary);
}

.menu-bar {
  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;

  position: relative;
}

.menu-bar ul {
  list-style: none;
  display: flex;
}

.menu-bar ul li {
  /* width: 120px; */
  padding: 10px 30px;
  /* text-align: center; */

  position: relative;
}

.menu-bar ul li a {
  font-size: 20px;
  color: var(--color-white);
  text-decoration: none;

  transition: all 0.3s;
}

.menu-bar ul li a:hover {
  color: white;
}

.fas {
  float: right;
  margin-left: 10px;
  padding-top: 3px;
}

/* dropdown menu style */
.dropdown-menu {
  display: none;
}

.menu-bar ul li:hover .dropdown-menu {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  background-color: var(--color-black);
}

.menu-bar ul li:hover .dropdown-menu ul {
  display: block;
  margin: 10px;
}

.menu-bar ul li:hover .dropdown-menu ul li {
  width: 150px;
  padding: 10px;
}

.dropdown-menu-1 {
  display: none;
}

.dropdown-menu ul li:hover .dropdown-menu-1 {
  display: block;
  position: absolute;
  left: 150px;
  top: 0;
  background-color: var(--color-black);
}

.div2 {
 background-color: #080808;
 height: 75%;
 width:100%;
}
h2{color: #dd195b;
font-style:initial;
text-align: center;
font-size: 30px;
}
p{
  align-items:center;
  text-align: justify;

  font-size: 24;
  color:#dd195b;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.div3{  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  
  
  
  
  text-align: center;

  
  
}
h3{color: #090a0a;
font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-style: italic;}


    </style>
  </head>
  <body>
  
    <div class="menu-bar">
      <h1 class="logo"><span>Employee Management System</span></h1>
      <ul>
        <li><a href="home1.php">Home</a></li>
        
        <li><a href="#">Admin <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                  <li><a href="admin.php">Login</a></li>
                  
               
                        
                      </ul>
                      <li><a href="#">User <i class="fas fa-caret-down"></i></a>

                        <div class="dropdown-menu">
                            <ul>
                              <li><a href="userlogin.php">Login</a></li>
                              <li><a href="signup.php"> Registration</a></li>
                              
                           
                                    
                                                </ul>
                      
                    </div>
                  </li>
                  <li><a href="aboutus.php">About Us</a></li>
                  <li><a href="contactus.php">Contact Us</a></li>
                </ul>
              </div>
    
        
      

    <div class="div2"><br/><br/><br/>
        <h2>About Us</h2></br>
        <p>
        <img src="images/employee.jpg" alt="Smiley face" style="float:right;width: 250px;height:250px;">
        The purpose of this project is to create online Record Management Program which is essential to Organization. The main Purpose of the online PHP projects is also to develop web applications. The Employee Record information Management System we designed to automate the employee administration and management and the strategic planning of leaves for employees. This program manages all of the employee records. Employee Leave Record Management System was developed primarily to handle information about the employee. That serves as an instrument for better management. The key goal of this project to create an effective web-enabled framework that would be able to simplify workplace knowledge a management needs. It is meant to simplify the current manual framework for quick information collection, produce statistical reports and act as a data archive for efficient sharing of data and possible retrieval.

  
        </p>
        
    </div>
    <div class="div3"><br/><br/><h3>Aaroncomputer@employee management record system 2023</h3></div>
  </body>
</html>
