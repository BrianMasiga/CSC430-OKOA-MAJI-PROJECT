<!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OKOA MAJI APP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <!--  Begin Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">      
            <span class="d-none d-md-block ps-2">#OKOAMAJI</span>
        </li>
      </ul>
    </nav>

  </header>
  <!-- End Header -->

    <!-- Begin SideNav -->
    <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="readings.php">
          <i class="bi bi-bar-chart"></i>
          <span>Readings</span>
        </a>
        </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="articles.php">
          <i class="bi bi-list"></i>
          <span>Articles</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="community.php">
          <i class="bi bi-people"></i>
          <span>Community</span>
        </a>
      <li class="nav-item">
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </aside>
  <!-- End SideNav-->
  <main id="main" class="main">
  </div>
<body>
  
<script>
  // Select the <span> elements by their IDs
const totalWaterSpan = document.getElementById("total-water");
const estimatedCostSpan = document.getElementById("estimated-cost");

// Retrieve the values of the hidden input fields
const totalUsed = parseFloat(document.getElementById("total-used").value);
const totalCost = parseFloat(document.getElementById("total-cost").value);

// Update their text content with the variables
totalWaterSpan.textContent = totalUsed.toFixed(2) + " Litres";
estimatedCostSpan.textContent = totalCost.toFixed(2) + " Ksh";

  </script>
  <div class="container mt-4 mb-4">
    <div class="alert alert-success text-center" role="alert">
      The section below allows you to feed in the meter readings and records them in real time.
    </div>  
    <h5 class="alert alert-info text-center" role="alert"> RECORD YOUR READINGS IN REAL-TIME:<span class="blinking-dot"></span></h5>
    <form id="water-usage-form" method="post">
  <div class="form-group">
    <label for="previous-reading">PREVIOUS READING:</label>
    <input type="number" class="form-control" id="previous-reading" name="previous_reading" value="<?php echo $row['previous_reading'] ?>" step="any" required>
  </div>
  <div class="form-group">
    <label for="current-reading">CURRENT READING:</label>
    <input type="number" class="form-control" id="current-reading" name="current_reading" value="<?php echo $row['current_reading'] ?>" step="any" required>
  </div>
  <div class="form-group">
    <label for="cost-per-liter">COST PER UNIT:</label>
    <input type="number" class="form-control" id="cost-per-liter" name="cost_per_liter" value="<?php echo $row['cost_per_liter'] ?>"  step="any" required>
  </div>
  <br>
  <button type="submit" class="btn btn-success">UPDATE RECORD</button>

</form>
<br>

<div id="clear-records-message"></div>

<script>

  $(document).ready(function() {
  // Add click event listener to Clear Records button
  $("#clear-records-button").click(function() {
    // Send AJAX request to clear_records.php
    $.ajax({
      url: "clear_records.php",
      type: "POST",
      success: function(data) {
        // Display response message
        $("#clear-records-message").html(data);
      }
    });
  });
});

  </script>
<?php
// Get the form data
$previous_reading = $_POST['previous_reading'] ?? '';
$current_reading = $_POST['current_reading'] ?? '';
$cost_per_liter = $_POST['cost_per_liter'] ?? '';


$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the table
$sql = "INSERT INTO water_usage (previous_reading, current_reading, cost_per_liter) VALUES ('$previous_reading', '$current_reading', '$cost_per_liter')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Check if the clear records button was clicked
if (isset($_POST['clear_records'])) {
  // Delete all records from the table
  $sql = "DELETE FROM water_usage";
  if ($conn->query($sql) === TRUE) {
    echo "Records cleared successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
// Close the database connection
$conn->close();
?>

    <br>
    
    <hr>
    <div class="alert alert-info text-center" role="alert">
      <b>REAL-TIME RECORDS</b>
    </div> 
    <table class="table table-bordered table-striped" id="report-table" name="report-table">
  <thead>
    <tr>
      <th scope="col">DATE & TIME OF RECORDING</th>
      <th scope="col">INITIAL VALUE</th>
      <th scope="col">CURRENT VALUE</th>
      <th scope="col">AMOUNT USED</th>
      <th scope="col">COST</th>
    </tr>
  </thead>
  <tbody id="report-table-body" class="scrollable-tbody">

    <?php
      // Connect to the database
      $servername = "localhost";
      $username = "admin";
      $password = "admin1234";
      $dbname = "okoamaji";

      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Fetch the data from the database
      $sql = "SELECT * FROM water_usage";
      $result = $conn->query($sql);

      // Initialize total variables
      $totalUsed = 0;
      $totalCost = 0;

      // Output the data in the table
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $usage = $row["current_reading"] - $row["previous_reading"];
          $cost = $usage * $row["cost_per_liter"];
          echo "<tr>";
          echo "<td>" . $row["created_at"] . "</td>";
          echo "<td>" . $row["previous_reading"] . "</td>";
          echo "<td>" . $row["current_reading"] . "</td>";
          echo "<td>" . $usage . "</td>";
          echo "<td>" . $cost . "</td>";
          echo "</tr>";
          // Add to total variables
          $totalUsed += $usage;
          $totalCost += $cost;
        }
        // Output total row
        echo "<tr>";
        echo "<td colspan='3'><strong>Total:</strong></td>";
        echo "<td><strong>" . $totalUsed . "</strong> Litres</td>";
        echo "<td><strong>" . $totalCost . "</strong> Ksh</td>";
        echo "</tr>";
      } else {
        echo "<tr><td colspan='5'>No data found</td></tr>";
      }
  
      // Close the database connection
      $conn->close();
    ?>
  </tbody id="report-table-body">
</table>
<br>
<div class="row">
  <div class="col-md-3"><button id="print-button" class="btn btn-secondary">PRINT REPORT</button>
</div>
  <div class="col-md-3"><form id="clear-records-form" method="post" action="clear_records.php">
  <button type="submit" class="btn btn-danger">CLEAR RECORDS</button></div>
</div>

</form>
  </div>
</body>
  
  
  <div class="container">
  <hr>
  <br>
  <div class="row">
    
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <br>
          <div class="alert alert-info text-center" role="alert">
            <b>AMOUNT OF WATER USED</b>
          </div> 
          <p class="card-text text-center"><span id="total-usage"><?php echo $totalUsed; ?></span> Litres</p>
          <?php
            $usagePercentage = ($totalUsed / 12000) * 100;
            if ($usagePercentage <= 50) {
              $progressBarColor = "bg-success";
              echo "<p class='alert alert-success'> Wonderful! Lets keep saving, you are within range!</p>";
            } else if ($usagePercentage <= 80) {
              $progressBarColor = "bg-warning";
              echo "<p class='alert alert-warning'>Slow Down. You are using more than the reccomended Amount</p>";
            } else {
              $progressBarColor = "bg-danger";
              echo "<p class='alert alert-warning'> We are way over our target! Lets save more</p>";
            }
          ?>
          <div class="progress">
            <div class="progress-bar <?php echo $progressBarColor; ?>" id="cost-progress" role="progressbar" style="width: <?php echo $usagePercentage; ?>%;" aria-valuenow="<?php echo $totalUsed; ?>" aria-valuemin="0" aria-valuemax="12000"></div>
          </div>
          <br>
          <p class="alert alert-info">Reccomended target: 9,000 Litres/ Month</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <br>
          <div class="alert alert-info text-center" role="alert">
            <b>COST ACCRUED</b>
          </div> 
          <p class="card-text text-center"><span id="total-cost"><?php echo $totalCost; ?></span> Ksh</p>
          <?php
            $costPercentage = ($totalCost / 3000) * 100;
            if ($costPercentage <= 50) {
              $progressBarColor = "bg-success";
              echo "<p class='alert alert-success'> Wonderful! Lets keep saving, you are within range!</p>";

            } else if ($costPercentage <= 80) {
              $progressBarColor = "bg-warning";
              echo "<p class='alert alert-warning'>Slow Down. You are going to dent that wallet!</p>";

            } else {
              $progressBarColor = "bg-danger";
              echo "<p class='alert alert-warning'> We are way over our target! Lets save more</p>";

            }
          ?>
          <div class="progress">
            <div class="progress-bar <?php echo $progressBarColor; ?>" id="water-progress" role="progressbar" style="width: <?php echo $costPercentage; ?>%;" aria-valuenow="<?php echo $totalCost; ?>" aria-valuemin="0" aria-valuemax="3000"></div>
          </div>
          <br>
          <p class="alert alert-info">Reccomended target: 1,350 Ksh/ Month</p>
        </div>
      </div>
    </div>
  </div>
</div>

    <script>


const printButton = document.getElementById('print-button');
const reportTable = document.getElementById('report-table');

printButton.addEventListener('click', () => {
  window.print();
});

      $(document).ready(function() {
  // Add event listener to the clear records button
  var clearRecordsButton = document.getElementById("clear-records-button");
  clearRecordsButton.addEventListener("click", function() {
    // Confirm that the user wants to clear the records
    var confirmClear = confirm("Are you sure you want to clear all records?");
    if (confirmClear) {
      // Send an AJAX request to the server to delete all records
      $.post("clear_records.php", function(data) {
        // Reload the page to show the updated table
        location.reload();
      });
    }
  });
});

</script>
     
</div>
</body>
      </body>
    <div class="container">
    <hr>
      <body> 
 <?php
 
 ?>
          <div class="alert alert-dark text-center" role="alert">
            Average Household Water Usage Chart          </div> 
            <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Activity</th>
      <th scope="col">Number of times per day</th>
      <th scope="col">Estimated amount of water used (Litres)</th>
      <th scope="col">Total Litres of water used each day for this task</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Washing face/hands</td>
      <td>1</td>
      <td>2</td>
      <td>2</td>
    </tr>
    <tr>
      <td>Taking a shower (standard shower head)</td>
      <td>1</td>
      <td>50</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Taking a shower (low flow shower head)</td>
      <td>1</td>
      <td>25</td>
      <td>25</td>
    </tr>
    <tr>
      <td>Taking a bath</td>
      <td>1</td>
      <td>36</td>
      <td>36</td>
    </tr>
    <tr>
      <td>Brushing teeth (water running)</td>
      <td>2</td>
      <td>4</td>
      <td>8</td>
    </tr>
    <tr>
      <td>Brushing teeth (water turned off)</td>
      <td>2</td>
      <td>0.25</td>
      <td>0.5</td>
    </tr>
    <tr>
      <td>Flushing the toilet</td>
      <td>4</td>
      <td>3</td>
      <td>12</td>
    </tr>
    <tr>
      <td>Shaving</td>
      <td>1.5</td>
      <td>2</td>
      <td>3</td>
    </tr>
    <tr>
      <td>Drinking a glass of water</td>
      <td>2</td>
      <td>0.25</td>
      <td>0.5</td>
    </tr>
    <tr>
      <td>Washing dishes by hand</td>
      <td>2</td>
      <td>4</td>
      <td>8</td>
    </tr>
    <tr>
      <td>Running a dishwasher</td>
      <td>1</td>
      <td>6</td>
      <td>6</td>
    </tr>
    <tr>
      <td>Doing a load of laundry</td>
      <td>1</td>
      <td>30</td>
      <td>30</td>
    </tr>
    <tr>
      <td>Watering lawn</td>
      <td>1</td>
      <td>300</td>
      <td>300</td>
    </tr>
    <tr>
      <td>Washing car</td>
      <td>1</td>
      <td>50</td>
      <td>50</td>
    </tr>
  </tbody>
</table>
        </div>
      </body>       
            </div>
          </div>
        </div>

        <div class="col-lg-4">
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <style>
    .blinking-dot {
      display: inline-block;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: green;
      margin-left: 10px;
      animation: blink 1.5s linear infinite;
    }

    @keyframes blink {
      0% { opacity: 1; }
      50% { opacity: 0; }
      100% { opacity: 1; }
    }
    .card {
      transition: background 0.5s ease;
      background: #fff;
      border-radius: 20px;
    }

  </style>
    <!-- Add jQuery, Chart.js and Bootstrap JS for functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      

  const percentage = Math.min((current / target) * 100, 100);
  const progressBar = document.getElementById(progressId);

  progressBar.style.width = percentage + '%';
  progressBar.setAttribute('aria-valuenow', percentage);

  if (percentage <= 50) {
    progressBar.classList.add('bg-success');
    progressBar.classList.remove('bg-warning', 'bg-danger');
  } else if (percentage <= 79) {
    progressBar.classList.add('bg-warning');
    progressBar.classList.remove('bg-success', 'bg-danger');
  } else {
    progressBar.classList.add('bg-danger');
    progressBar.classList.remove('bg-success', 'bg-warning');
  }

document.getElementById('target-cost').addEventListener('input', function () {
  updateProgressBar('total-cost', 'target-cost', 'cost-progress');
});

document.getElementById('target-use').addEventListener('input', function () {
  updateProgressBar('total-water', 'target-use', 'water-progress');
});

</script>
<!--All scripts End-->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>okoamajiapp</span></strong>. All Rights Reserved
    </div>
  </footer>
  <!-- End Footer -->
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>