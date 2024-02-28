<?php

                      if(isset($_POST['submit']))
                      {

                          $fname=$_POST['fname'];
						  $lname=$_POST['lname'];
						  $username=$_POST['username'];
						  $password=$_POST['password'];
                          $email=$_POST['email'];
                          $phone=$_POST['phone'];


                          $conn=mysqli_connect("localhost","root","","cosmetic");

                          $query="INSERT INTO register(fname,lname,username,password,email,phone) VALUES('$fname','$lname','$username','$password','$email','$phone')";

                          $exe_query=mysqli_query($conn,$query);
                          
                          if($exe_query)
                          {
                            echo "<script>alert('You are regiter successfully !');</script>";
                            header("Location: product.php");
                          }
                          else 
                          {
                              echo "Error: " . $sql . "" . mysqli_error($conn);
                          }
                      }
                          ?>