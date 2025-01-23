<?php
            // Database connection parameters
            $servername = "localhost"; // Change to your MySQL server's hostname
            $username = "root"; // Change to your MySQL username
            $password = ""; // Change to your MySQL password
            $dbname = "eco"; // Change to your database name
        
            // Create a connection to MySQL
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // Check the connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // Query to get the highest sno
            $sql = "SELECT MAX(id) AS max_sno FROM sensordata";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // Fetch the row with the highest sno
                $row = $result->fetch_assoc();
                $max_sno = $row["max_sno"];
        
                // Query to get the data from the last row with the highest sno
                $sql = "SELECT * FROM sensordata WHERE id = $max_sno";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    // Display the data in a table
                    echo "<table border='1'>";
                    echo "<tr><th>SNO</th><th>Temperature</th><th>Humidity</th><th>pH</th><th>Turbidity</th><th>Distance</th><th>Weight</th><th>Timestamp</th></tr>";
                    $row = $result->fetch_assoc();
                    echo "<tr><td>".$row["id"]."</td><td>".$row["value1"]."</td><td>".$row["value2"]."</td><td>".$row["value3"]."</td><td>".$row["value4"]."</td><td>".$row["value5"]."</td><td>".$row["value6"]."</td><td>".$row["reading_time"]."</td></tr>";
                    echo "</table>";
                } else {
                    echo "No records found.";
                }
            } else {
                echo "No records found.";
            }
        
            // Close the database connection
            $conn->close();
            ?>