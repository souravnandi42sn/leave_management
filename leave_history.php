<html>

    <head>
        
        <title>
            Leave History
        </title> 
        <style>
            
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
             }

             #customers td, #customers th {
                 border: 1px solid #ddd;
                 padding: 8px;
             }

             #customers tr:nth-child(even){background-color: #f2f2f2;}

             #customers tr:hover {background-color: #ddd;}

             #customers th {
                 padding-top: 12px;
                 padding-bottom: 12px;
                 text-align: center;
                 background-color: #4CAF50;
                 color: white;
             }
            ul {
                 list-style-type: none;
                 margin: 0;
                 padding: 0;
                 overflow: hidden;
                 background-color: #333;
            }

            li {
                 float: left;
            }

            li a {
                 display: block;
                 color: white;
                 text-align: center;
                 padding: 14px 16px;
                 text-decoration: none;
            }

            li a:hover {
                 background-color: #111;
            }
            .right {
                 position: absolute;
                 right: 50px;
                 width: 100px;
                 
            }
</style>
    </head>
    <body>
        <div>
            <ul>
                
                <li><a class="active" href="form/from.php">Home</a></li>
                <!--<li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>-->
                <li><a href="login.php" class=right>Logout</a></li>
            </ul>

        </div>
        <div>
        <?php
           $con=mysqli_connect("localhost","admin","pass","login_detail"); //The Blank string is the password

    

           $query = "SELECT * FROM leave_apply where status ='a'"; //You don't need a ; like you do in SQL
           $result = mysqli_query($con,$query);

           echo "<table id=customers>"; // start a table tag in the HTML
           echo "<tr><th>Leave_Apply_ID</th><th>User_Name</th><th>Leave_Type</th><th>From_Date</th><th>To_Date</th><th>Total_Days</th><th>Reason</th><th>Status</th><th>Applied_Date</th><th>Approved_Date</th><th>Approve_ID</th></tr>";
           while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
           echo "<tr><td>" . $row['leave_apply_id'] . "</td><td>" . $row['user_name'] . "</td><td>" . $row['leave_type'] . "</td><td>" . $row['from_date'] . "</td><td>" . $row['to_date'] . "</td><td>" . $row['total_days'] . "</td><td>" . $row['reason'] . "</td><td>" . $row['status'] . "</td><td>" . $row['applied_date'] . "</td><td>" . $row['approved_date'] . "</td><td>" . $row['approv_id'] . "</td></tr>";  //$row['index'] the index here is a field name
           }

           echo "</table>"; //Close the table in HTML

           mysqli_close($con); //Make sure to close out the database connection
        ?>
        </div>
    </body>
</html>