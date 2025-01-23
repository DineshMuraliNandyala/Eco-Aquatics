<!DOCTYPE html><html>
  <head>
    <meta charset="utf-8"/>

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>

  <title>Fish health monitoring</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        // Define a function to make the AJAX call
        function fetchData() {
            $.ajax({
                url: 'http://localhost:5500/',
                type: 'GET',
                success: function(data) {
                    $('#results').html(data);
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data:", error);
                    $('#results').html('<p>Error fetching data from Flask app.</p>');
                }
            });
        }

        // Bind the function to the click event of the button
        $(document).ready(function() {
            $('#clickme').click(function() {
                fetchData();
            });
        });
    </script>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <span>
                  Fish
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex  flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"> Sensors</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      FeedEfficient:<br>
                      Fish Health Monitoring System
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/image1.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                     FeedEfficient<br>
                     Fish Health Monitoring System
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/image1.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-lg-5 col-md-6">
                  <div class="slider_detail-box">
                    <h1>
                      FeedEfficient<br>
                      Fish Health Monitoring System
                    </h1>
                    
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/image1.png" alt=""/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- welcome section -->
  <section class="welcome_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Welcome To The Fish health Monitoring system
        </h2>
      </div>
      <div class="layout_padding2">
        <div class="img-box">
          <img src="images/image9.png" alt=""/>
        </div>
        <div class="detail-box">
          <p>
            The lack of human resources for fish health monitoring poses a significant challenge in ensuring the well-being and productivity of fish populations in aquaculture systems. Fish Health Monitoring System is a comprehensive and reliable solution for efficient fish health management in aquaculture ponds. The system integrates real-time water quality monitoring with an automated fish feeding mechanism, using sensors to continuously measure essential parameters and track fish behavior during feeding. This proactive approach reduces stress, and improves feed efficiency, leading to enhanced fish health and productivity. The user-friendly interface empowers aquaculture farmers to make well-informed decisions, optimizing feeding schedules and enhancing overall productivity. This system addresses the critical need for efficient fish health management in aquaculture ponds, overcoming the limitations of existing techniques. Pilot tests demonstrating improved feed efficiency and enhanced fish health.
          </p>
          <div>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->

  <section class="service_section">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Services
        </h2>
      </div>
      <div class="service_container layout_padding2">
        <div class="service_box">
          <div class="img-box">
            <img src="images/s-1.jpg" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Collection of sensors data<br/>
              
            </h4>
           
             </table><br>
        
            </p>
          </div>
        </div><br><br><br>
        <div class="service_box">
          <div class="img-box">
            <img src="images/image3.png" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Food Recommandation
            </h4>
            <p>
             The food can be provided on the basis of the fish health and the food left out the prevoius day
            </p>
          </div>
        </div>
        <div class="service_box">
          <div class="img-box">
            <img src="./images/threshold.jpg" alt=""/>
          </div>
          <div class="detail-box">
            <h4>
              Thresold values of sensors
            </h4>
           
          </div>
        </div>
      </div>
      <div>
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>
  <section class="why_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Collection of sensors data
        </h2>
      </div>
      <!-- <div class="content-container">  
        <p></p>   
      </div> -->
         <section>  
          
          <div class="collection">  
            
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
      </div>
      </section>

  
  <!-- end problem section -->
  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container" >
      <div class="custom_heading-container">
        <h2 style="color:aquamarine;text-align: center;font-size:50px">
          Measures to be taken when the sensors value  over the thresold values
        </h2>
      </div>
      <div class="content-container">
        
        <div class="descriptiontable">
          
          <h1 style="font-size: 40px;color:rgb(34, 10, 169);text-align: left;">Ph</h1> 
            <h3 style="color:aliceblue;font-size:25px;text-align:justify">Apply agricultural limestone or lime if the water has lime</h3>
          <h1 style="font-size: 40px;color:rgb(34, 10, 169);text-align: left;">Turbidity   :<h1></h1>
            <h3 style="color:aliceblue;font-size:25px;text-align:justify">Eliminate the source of the problem by planting grass or other vegetation on exposed areas, putting a layer of rocks over exposed banks, or removing muskrats or bottom-dwelling fish</h3>
          <h1 style="font-size: 40px;color:rgb(34, 10, 169);text-align: left;">Temperature:</h1>
              <h3 style="color:aliceblue;font-size:25px;text-align:justify">1.Shade the pond<br>
              2.Use alteration<br>
              3.Plant Aquatic Vegatation<br>
            </h3><br>
          <h1 style="font-size: 40px;color:rgb(34, 10, 169);text-align: left;">Humidity</h1>
             <h3 style="color:aliceblue;font-size:25px;text-align:justify">1.Surface Coverage<br>
                      2.Water Depth<br>
                      3.Aeration<br>
          </h3>
            
          
          
            
        </div>
      </div>
    </div>
  </section>
  
       
          
         
      
      
  <section>  
    <h1 style="color:aquamarine;font-size:50px;text-align: center;">Sensors and the thresold Values</h1>
    <div class="thresold">  
      
  <table>
    <tr>
        <th>sensor</th>
        <th>Thresold value</th>
    </tr>
    <tr>
        <td>ph sensor</td>
        <td>6.5-8.5</td>
    </tr>
    <tr>
        <td>Ultrasonic sensor</td>
        <td>25cm</td>
    </tr>
    <tr>
        <td>Turbidity sensor</td>
        <td>0-4.5</td>
    </tr>
    <tr>
        <td>Dht11 sensor</td>
        <td>72-82f</td>
    </tr>
    <tr>
        <td>Weight sensor</td>
        <td>10kg</td>
    </tr>
</table>
</div>
</section>

  
  

  <!-- end why section -->

  <!-- client section -->
  
  <!-- end client section -->
  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container contact_heading">
      <h2>
        Contact Us
      </h2>
      
    </div>
    <div class="container">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputName4">Name</label>
            <input type="text" class="form-control" id="inputName4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4"/>
          </div>

        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputNumber4">Phone number</label>
            <input type="tel" class="form-control" id="inputNumber4"/>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Select Service</label>
            <select id="inputState" class="form-control">
              <option selected=""></option>
              <option>...</option>
            </select>
          </div>

        </div>
        <div class="form-group">
          <label for="inputMessage">Message</label>
          <input type="text" class="form-control" id="inputMessage" placeholder=""/>
        </div>
    </div>

    <div class="d-flex justify-content-center">
      <button type="submit" class="">Send</button>
    </div>
    </form>
    
  </section>


  <!-- end contact section -->
  <div class="footer_bg">
    <!-- info section -->
    <section class="info_section layout_padding2-bottom">
      <div class="container">
        <h3 class="">
          
        </h3>
      </div>
      <div class="container info_content">

        <div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Useful Link
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Loram ipusm
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  The Services
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum dolor
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sit amet, consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing elit,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      sed do eiusmod
                    </a>
                  </li>
                  <li>
                    <a href="">
                      tempor incididunt
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="d-flex">
                <h5>
                  Contact Us
                </h5>
              </div>
              <div class="d-flex ">
                <ul>
                  <li>
                    <a href="">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      About Departments
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="">
                      Contact Us
                    </a>
                  </li>
                </ul>
                <ul class="ml-3 ml-md-5">
                  <li>
                    <a href="">
                      Lorem ipsum
                    </a>
                  </li>
                  <li>
                    <a href="">
                      dolor sit amet,
                    </a>
                  </li>
                  <li>
                    <a href="">
                      consectetur
                    </a>
                  </li>
                  <li>
                    <a href="">
                      adipiscing
                    </a>
                  </li>
                  <li>
                    <a href="">
                      elit, sed do eiusmod
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center align-items-lg-baseline">
          <div class="social-box">
            <a href="">
              <img src="images/fb.png" alt=""/>
            </a>

            <a href="">
              <img src="images/twitter.png" alt=""/>
            </a>
            <a href="">
              <img src="images/linkedin1.png" alt=""/>
            </a>
            <a href="">
              <img src="images/instagram1.png" alt=""/>
            </a>
          </div>
          <div class="form_container mt-5">
            <form action="">
              <label for="subscribeMail">
                Newsletter
              </label>
              <input type="email" placeholder="Enter Your email" id="subscribeMail"/>
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>

    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <section class="container-fluid footer_section">
      <p>
        © 2019 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </section>
    <!-- footer section -->
  </div>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



</body></html>