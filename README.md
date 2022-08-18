# Task3-Robot-Sensor-Value


## Table Of Content
1. [Running the local server XAMPP](#Running-the-local-server)
2. [Setting up the database](#Setting-up-the-database)
3. [Connectting PHP with the DataBase](#Connectting-PHP-with-the-DataBase) 
4. [Creating the Interface](#Creating-the-Interface)
5. [Checking the DataBase](#Checking-the-DataBase) 



#Running the local server

Since we want to work with API, in other word work with the user and store and take info from the users using GET method. 
We have to run our local sever XAMPP, and placing our folders in htodcs file. Then when we want to access the file we have to write in 
browser's URl: 
        localhost/then the name of our folder
        
if we didn't do that we will see an error message as such:


       "/* Open a Connection to MySQL: Before we can access data in the MySQL database, we need to be able to connect to the server */"

# Setting up the database


<img width="654" alt="image" src="https://user-images.githubusercontent.com/63984422/184484730-cdd30206-b9f3-4cd9-a657-9e4620bd26ff.png">


# Connectting PHP with the DataBase 

                    <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="getmethod";
                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                    ?>
                    
                    
 # Creating the Interface
 
 For creating the user interface, I used the open sourse HTML5.net tampletes and customized it for my purpose 
 https://html5up.net/
 
 ![image](https://user-images.githubusercontent.com/63984422/185338916-d8f3eb53-7156-4dc2-8cbf-ee13428dacf6.png)


![image](https://user-images.githubusercontent.com/63984422/185338946-ae03fed0-f8fd-4793-a232-9b69d1d83b40.png)


![image](https://user-images.githubusercontent.com/63984422/185338974-f10c3d13-dbe1-46a6-bc0d-568a6ebe8fd1.png)


![image](https://user-images.githubusercontent.com/63984422/185339030-80f56274-50db-41ef-a55c-d4e72eb6001d.png)



# Checking the DataBase

Indeed, our value that we intered is saved in the database

![image](https://user-images.githubusercontent.com/63984422/185339729-b6069a18-296b-45f9-8eea-1da3fb368625.png)

