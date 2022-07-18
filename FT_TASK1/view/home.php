<?php
include ("../Control/RegistrationCheck.php");
?>


<html>
    <head>
        <h2>Registration Form</h2>  
    </head>
    <body>
        <form action=""  method="post">
            <table>
              <tr>
                  <td> <label for="fname">First name:</label></td>
                  <td> <input type="text" id="fname" name="fname">
                  <?php
                  echo $fnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                  <td> <label for="lname">Last name:</label> </td>
                  <td> <input type="text" id="lname" name="lname">
                  <?php
                  echo $lnameerr;
                  ?></td>
                  
              </tr> 
              <tr>
                <td> <label for="age">Age:</label> </td>
                <td> <input type="number" id="age" name="age" min=1> 
                <?php
                  echo $ageerr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="designation">Designation:</label> </td>
                <td><input type="radio" id="juniorprogrammar" name="designation" value="Junior Programmer">
                <label for="juniorprogrammer">Junior Programmer</label>
                <input type="radio" id="seniorprogrammar" name="designation" value="Senior Programmer">
                    <label for="seniorprogrammer">Senior Programmer</label>
                <input type="radio" id="projectload" name="designation" value="Project Load">
                    <label for="projectload">Project Load</label>
                    <?php
                  echo $deserr;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="preferredlanguage">Preferred Language</label> 
                <td><input type="checkbox" id="java" name="Java" value="Java">
                <label for="java">Java</label>
                <input type="checkbox" id="php" name="PHP" value="PHP">
                    <label for="php">PHP</label>
                <input type="checkbox" id="c++" name="C++" value="C++">
                    <label for="c++">C++</label>
                    <?php
                  echo $plerr.$pl1.$pl2.$pl3;
                  ?></td>
            </tr>
            <tr>
                <td> <label for="email">Email:</label> </td>
                <td> <input type="text" id="email" name="email"> 
                <?php
                  echo $emailerr;
                  ?></td>
            </tr> 
            <tr>
              <td> <label for="password">Password:</label> </td>
              <td> <input type="password" id="password" name="password"> 
              <?php
                  echo $passerr;
                  ?></td>
          </tr>
    
          <tr>
          <td>Please choose a file :</td>
          <td><input type="file"></td>
          </tr>
 
    
         <tr>
        <td><input type="submit" name="Submit">
       <input type="reset" name="Reset"></td>
       </tr>
            </table>
        </form>

    </body>
</html>