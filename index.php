<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

        <title>Lab Exercise 3</title>
    </head>
    <body>
        
           <div class="header-container">   
            <header class="header-fix">
               <h1> <i class="fas fa-table"></i>Forms</h1>
             </header>
            </div>
 
            <div class="container"> 
             
           <section>
              
            <aside class="Aside">
                <h2><i class="fa fa-question"></i>Info</h2>
                      <ul>
                        <li><b>method: POST</b></li>
                         <li><b>Madatory fields</b></li>
                         <li><b>Standard field: Text and password</b></li>
                         <li><b>Checkbox: Checkbox</b></li>
                         <li><b>Standard button: submit</b></li>
                    </ul>
            </aside>
            <article>
             <h2 title="Login Form"> Login Form</h2>
                
                <p class="marginbot50">
                   Standard form to enter these <strong>login credentials<strong>
                </p>
                <br>
         
                <form action="" method="post" enctype="multipart/form-data" class="form-element" >
              <input type="hidden" name="loginform" value="login">  
                   <div> 
                    <div> 
                      <div> 
               <label>Enter your username: </label>
                  <input type="text" name="Username" required minlength="2" maxlength="20">
                </div>
                <div> 
               <label>Enter your password: </label>
                  <input type="password" name="Password" required minlength="8" maxlength="32" pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[A-Z])(?=.*[-\#\$\.\%\&\*])(?=.*[a-zA-Z])">
                </div>
              </div> 
              
              <div> 
              <div>
                <input type="checkbox" if="check">

             <label for="check">Remember me</label>
          </div>
            </div>
                <div class="align-right"> 
                  <input type="submit" value="Login">
                </div>
                
             </div>

  
            </form>
            <div class="result">
            <?php 
            error_reporting(E_ERROR | E_PARSE);
            if(!empty($_POST) && $_POST['loginform']==="login") { ?>
 
<b>Values returned by the form:</b><br>
<ul>
<?php 
foreach($_POST as $key => $value) { echo'<li>'.$key.' =>'.$value.'</li>';
} ?>
</ul>

<?php }?>
</div>
              
               </article>
            <br>
            <br>
          </section>
          <hr>
          <br>
          <section>
            <aside class="Aside">
              <h2><i class="fa fa-question"></i>Info</h2>
              <ul>
                  <li>method: POST</li>
                  <li>Mandatory fields</li>
                  <li>File sending</li>
                  <li>Standard field: text, email, date, file and password</li>
                  <li>Checkbox checkbox</li>
                  <li>Radio button: submit</li>
                  <li>Standard button: submit</li>
              </ul>
            </aside>
            <article>
              
              <h2>Registration Form</h2>
              <p>Standard form for <strong>online registration</strong> on a website</p>
              <form action="" method="post" enctype="multipart/form-data" class="form-element">
              <input type="hidden" name="register_form" value="register">     
              <div> 

                  <div> 
                  <Label id="required">Enter your <strong>Gender</strong><span style="color: red; "><sup>*</sup></span></Label>
                  <div> 
                  <input type="radio"  id="rfamele" name="gender"  value="F">
                  <label for="rfemale">Female</label>
                  <input type="radio"  id="rmale">
                  <label for="rmale" name="gender" value="M">Male</label>
                </div>
                </div>
              <div>
                   <label  id="required" for="Lastname">Enter your <strong>Lastname</strong><span style="color: red; "><sup>*</sup></span></label>
                   <input type="text" name="Lastname" minlength="2" maxlength="17" required id="Laststname">
              </div>
            <div>
                   <label id="required" for="Firstname">Enter your <strong>Firstname</strong></label>
                   <input type="text" name="Firstname" minlength="2" maxlength="17" id="Firstname">
                  </div>
                <div>
                  <label for="bdate">Enter your <strong>Date of Birth</strong></label>
                  <input type="date" name="bdate" id="bdate">
                </div>
              <div>
                  <label for="profile">Enter your <strong>photo</strong></label>
                  <input type="file" name="profilepicture" id="profile">
                </div>
              <div>
                  <label id="required" for="email">Enter your <strong>Email address</strong><span style="color: red; "><sup>*</sup></span></label>
                  <input type="email"   name="email" id="email" required>
                </div>
              <div>
                  <label id="required" for="password">Enter your <strong>Password</strong><span style="color: red; "><sup>*</sup></span></label>
                  <input type="password"  name="password" id="password" required>
                </div>
              <div>
                  <label id="required" for="Cpassword">Confirm your <strong>Password</strong><span style="color: red; "><sup>*</sup></span></label>
                  <input type="password"  name="confirmPassword" id="Cpassword" required>
                </div> 
                <div> 
                  <span class="mandatory" id="required"  required="true"><span style="color: red; "><sup>* </sup></span>mandatory fields</span>
                </div>
                 
                <div>
                     <div>
                  <input type="checkbox" id="checkbox" required ;>
                  <label for="checkbox" name="AcceptTOS" value="ok">Accept TOS</label>
                  </div>
              </div>
              </div> 
                
                  <div class="align-right"> 
                  <input type="Submit" name="Registration" value="Registration">
                </div>
              
                 
                </form> 
               
                   

                <?php 
                error_reporting(E_ERROR | E_PARSE);
                if (!empty($_POST) && $_POST['register_form'] === "register") { ?>
                  <div class="result">      
                    <b>Values returned by the form:</b><br>
                    <ul>
                        <?php foreach ($_POST as $key => $value) {
                            echo '<li>' . $key . ' => ' . $value . '</li>';
                        } ?>
                    </ul>
                    <?php
            $target_dir = "uploads/";

// Check if the directory exists
if (!file_exists($target_dir)) {
    // If not, create the directory
    mkdir($target_dir, 0777, true);
}

      $target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
        if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file)) {
               echo '<div id="imageView">';
               echo '<p>Preview Image:</p>';
                echo '<img class="thumbnail" src="' . $target_dir . basename($_FILES["profilepicture"]["name"]) . '" alt="' . basename($_FILES["profilepicture"]["name"]) . '"">';
                echo '</div>';
            } else {
                      echo "Sorry, there was an error uploading your file.";
                    }?>

               </div>
               
                  <?php } ?> 
                </article>
            <br>
            <br>
          </section>
          <hr>
          <br>
          <section>
            <aside class="Aside">
              <h2><i class="fa fa-question"></i>Info</h2>
              <ul>
                  <li>method: POST</li>
                  <li>Mandatory fields</li>
                  <li>File sending</li>
                  <li>Standard field: text, email, date, file and password</li>
                  <li>Checkbox checkbox</li>
                  <li>Radio button: submit</li>
                  <li>Standard button: submit</li>
              </ul>
            </aside>
            <article>
              <h2>Contact Form</h2>
              <p>Standard form for maeking an <strong>information request</strong>on a website</p>
             
              <form action="" method="post" enctype="multipart/form-data" class="form-element">
              <input type="hidden" name="contact_form" value="contact">     
             
                <div> 
                  <div> 
                <label for="selectdep">Department you wish to contract: <span style="color: red; "><sup>*</sup></span></label>
                <select name="selectdep" id="required" required id="selectdep">
                  <option value="Select" selected>Select</option>
                  <option value="Sale Department">Sale Dapartment</option>
                  <option value="Communications Department">Communication Department</option>
                  <option value="Technical Department">Technical Department</option>
                </select>
              </div>
            <div>
                <label id="required" for="title">Enter your <strong>Title:</strong><span style="color: red; "><sup>*</sup></span></label>
                <input type="text" id="title" placeholder="More than 20 characters" name="Title" minlength="20" required>
              </div>
            <div>
                 <label id="required" for="question" class="verticap-top">Enter your <strong>Question</strong><span style="color: red; "><sup>*</sup></span></label>
                 <input type="textarea"  class="textarea" placeholder="Maximun 1000 characters..." maxlength="1000" required name="question">
                </div>
              <div>
                <label id="required" for="email-add">Enter your <strong>Email address: </strong><span style="color: red; "><sup>*</sup></span></label>
                <input type="email" name="email" placeholder="Your Email" required id="email-add">
              </div>
              </div>
                 <div class="align-right"> 
                  <input type="submit" name="contact" value="Contact">
                </div>
                </form>
                
                <?php
                error_reporting(E_ERROR | E_PARSE);
                if(!empty($_POST) && $_POST['contact_form']==="contact") { ?>
<div class="result">
<b>Values returned by the form:</b><br>
<ul>
<?php foreach($_POST as $key => $value) { echo'<li>'.$key.' =>'.$value.'</li>';
} ?>
</ul>
</div>
<?php }?>
            </article>
          </section>
        </div>
    </body>
</html>
