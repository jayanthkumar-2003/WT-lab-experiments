<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

body


    {
      background-image: url("");
      background-repeat: no-repeat;
      background-size: cover;
    }
    li a
    {
      color: White;
    }
    nav{
      float:right;
      word-spacing: 30px;
      padding: 20px;
    }
    nav li
    {
      display: inline-block;
      line-height: 70px;
    }

    body
    {
      background-color:skyblue;                                   
      background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjVsT2P8_MdJlttBmUdqUMBNUIJqz3uNn7GrSTAEA_Fg&usqp=CAU&ec=48665701");
    }
    .main {
     
      margin: auto;
      
      padding: 10px;
      height: 200px;;
      width: 50px;
      flex:1;
    
    }

            .main h1
            {
              text-align: center;
              color: green;
              align-items:center;
              justify-content:center;

            }
            td
            {
              padding:5px;
              text-align:left;
              color:darkblue;
              font-size:30px;
            }
            input[type = text],input[type = email],input[type = password],textarea
            {
              width:100%;
              padding: 10px 10px;
              margin:8px 0;
              border:2px ;
            }
            input[type = submit]
            {
              background-color: red;
              border: none;
              color: white;
              padding: 10px 10px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
            }
            button
            {
              background-color:indianred;
              border: none;
              color: white;
              padding: 5px 5px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
            }
            .top
            {
              width:100%;
              height:80px;

            }.top h1
            {
              text-align: center;

            }
            .p
            {
              display: flex;
              align-items:center;
              justify-content:center;
              /* box-shadow:5px 10px  #888888; */
            }
            .p1
            {
              flex:1;
            }
    </style>
    <script type="text/javascript">
      function f1()
      {
        window.location = "reg.php";
      }
      function f2()
      {
        window.location = "index.php";
      }
    </script>
  </head>
  <header>
    <div class="top">

      <nav>
        <ol>
        <li><button type="button" name="button" onclick = "f1()">sign Up</button>
      </li>

        <li><button type="button" name="button" onclick = "f2()">login</li></button>


        </ol>
      </nav>
    </div>
  </header>

  <body>
        <div class="p">
          
          <div class="main">

            <h1 style = background:white; align: center; >Create an Account</h1>


              <form class="" action="reg.php" method="post">
                <table>


                  <tr>
                    <td>Name:</td>
                    <td>
                      <input type="text" name="name" value="" placeholder="Enter your name " required ="required">
                    </td>
                  </tr>
                  <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" value="" placeholder="Enter User name " required ="required">
                    </td>
                  </tr>
                  <tr>
                     <td>Mail Id:</td>
                    <td>
                      <input type="email" name="email" value="" placeholder="Enter mail Id" required ="required">
                    </td>
                  </tr>
                  <tr>
                    <td>password:</td>
                    <td>
                        <input type="password" name="password" value="" placeholder="" required ="required">
                    </td>
                  </tr>

                  <tr>
                    <td>
                       <input type="submit" name="submit" value="submit">
                    </td>
                  </tr>
                </table>
              </form>
          </div>
        </div>

      <?php
          if(isset($_POST['submit']))
          {

            $q = mysqli_query($db,"SELECT * FROM `registration` where username =  '$_POST[username]';");
            $c = mysqli_fetch_row($q);
            if($c == 0)
            {
              $q = mysqli_query($db,"INSERT into `registration`(name,username,email,password) VALUES('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[password]');");
              if($q)
              {
                ?>
                <script type="text/javascript">
                  alert("Registration Successful");
                </script><?php

              }
              else {
                ?>
                <script type="text/javascript">
                  alert("Registration Failed");
                </script>
                <?php
              }
            }else {
              ?>
              <script type="text/javascript">
                alert("Username Already Exists");
              </script>
              <?php
            }

          }

       ?>
  </body>
</html>
