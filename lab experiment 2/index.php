<?php
session_start();
include "connection.php";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      html,body
      {
        height:100%;
      }
      .b1
      {
        width:100%;
        height:100px;
        border:1px solid white ;
        background:#1E90FF ;     }
      .b1 h1
      {
        text-align:center;
        background:dodgerblue;
        color: white;
      }
      .b2
      {
        flex:3;
        height:100%;
        border:0px solid white;
      }
      .b3
      {
          flex:1;
          background-color:dodgerblue;

        height:100%;
        border:0px white;   }
      .main
      {
          display: flex;
        width:100%;
        height:100%;
          border:0px solid blue;
      }
      .b5 table
      {
        margin:auto;
        padding-top:80px;
      }
      .b4
      {
        width:100%;
        height:25%;
        margin-right:20px;
        background-color:;
      }
      .b5
      {
        width:60%;
        margin:auto;
        height:50%;

      }
      .b6
      {
        width:100%;
        height:25%;
        background-color:;
      }
      tr,td
      {
        padding-right:150px;

      }
      .meta{

        margin-top:-80px;
      }

    </style>
  </head>
  <body>
    <div class="b1">
      <h1><b> facebook</b></h1>
      <img class="meta" src="data:image/png;base64,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" alt="" height = 100px width = 190px>
      
    </div>
    <div class="main">
      <div class="b2">
        <h3 style = "text-align:center;">FEED(Top 5 likes)</h3>
       <table cellspacing = "20px">
         <tr>
           <td>@</td>
           <td>Username</td>
           <td>post</td>
           <td>Likes Count</td>
         </tr>
         <?php
              $i = 1;
         $q = mysqli_query($db,"SELECT Username,image,likes from fb_upload where likes != 0   order by likes DESC limit 5;");
          ?>
          <?php while($row = mysqli_fetch_row($q))
          { ?>
          <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row[0]; ?></td>
            <td> <img src="posts/<?php echo $row[1]; ?>" width = "135px" height = "135px"> </td>
             <td><?php echo $row[2]; ?></td>
          </tr>
        <?php } ?>
       </table>
      </div>
      <div class="b3">
         <div class="b4">
                 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR68FfzDnr7iVq6KhqemXICn9ib7vIOkyNDwCifilUgpQ&usqp=CAU&ec=48665701" alt="" height = 290px width = 340px>
         </div>
         <div class="b5">
          <form class="" action="index.php" method="post">
            <table cellpadding = "10px">
              <tr>
                <td>
                  <p style = "text-align:center;"><b>Login</b></p>
                </td>

              </tr>
              <tr>
                <td>
                <input type="text" name="username" value="<?php if(isset($_COOKIE["user"])){  echo $_COOKIE['user']; } ?>" required = "required" placeholder ="User name">
                </td>
                </tr><tr>
                  
                <td>
                <input type="password" name="password" required = "required" value="<?php if(isset($_COOKIE["user"])){  echo $_COOKIE['pass']; } ?>"  >
                </td>

              </tr>
              <tr>
                <td
                <p style = "text-align:center;">
                  <input type="submit" name="submit" value="Login"> &nbsp  &nbsp
                  <button type="button" name="button"><a href="reg.php" style = "color:black">Sign Up</a></button>
                </p>
              </td>
              </tr>

            </table>
          </form>
         </div>
         <?php
                if(isset($_POST['submit']))
                {
                  $q = mysqli_query($db,"SELECT * FROM `registration` where username = '$_POST[username]' and password = '$_POST[password]';");

                  $count = mysqli_fetch_row($q);

                  if($count == 0)
                  {
                    ?>  <script type="text/javascript">
                        alert("Incorrect Username or Password");
                      </script>

                    <?php
                  }else {
                    if($_POST['remember'])
                    {
                      setcookie('user',$_POST['username'],time() + (86400 * 30));
                      setcookie('pass',$_POST['password'],time() + (86400 * 30));
                    }

                    $_SESSION['user'] = $_POST['username'];
                    ?>
                    <script type="text/javascript">
                      alert("Login");
                      window.location = "index1.php";
                    </script>
                    <?php
                  }
                }

          ?>
         <div class="b6">

         </div>
      </div>
    </div>

  </body>
</html>
