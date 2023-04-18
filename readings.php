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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--  Begin Header -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">   
        </li>
      </ul>
    </nav>

  </header>
  <!-- End Header -->

     <!-- Begin SideNav -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
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
        </li>
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
  <?php
  error_reporting(E_ERROR); // Only report errors, hide warnings and notices
  ?>
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

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

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
    <input type="number" class="form-control" id="current-reading" name="current_reading" value="<?php echo @$row['current_reading'] ?>" step="any" required>
  </div>
  <div class="form-group">
    <label for="cost-per-liter">COST IN KSH:</label>
    <input type="number" class="form-control" id="cost-per-liter" name="cost_per_liter" value="<?php echo $row['cost_per_liter'] ?>"  step="any" required>
  </div>
  <br>
  <button type="submit" class="btn btn-success w-100">UPDATE RECORD</button>

</form>
<?php
// Get the form data
if (!empty($_POST)) {
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

  // Check if the current input is the same as the previous input
  $row = array();
$sql = "SELECT current_reading, previous_reading, cost_per_liter FROM water_usage ORDER BY water_usage_id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
}

  if ($row['current_reading'] != $current_reading) {
    // Insert the data into the table
    $sql = "INSERT INTO water_usage (previous_reading, current_reading, cost_per_liter) 
            VALUES ('$previous_reading', '$current_reading', '$cost_per_liter')";

    if ($conn->query($sql) === TRUE) {
      echo "";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

}

?>

    <br>
    
    <hr>
    <div class="alert alert-info text-center" role="alert">
      <b>REAL-TIME RECORDS TABLE</b>
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
          $cost = $usage * $row["cost_per_liter"]/1000;
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
        echo "<tr><td colspan='5'>No Usage Data Has Been Recorded!</td></tr>";
      }
  
      // Close the database connection
      $conn->close();
    ?>
  </tbody id="report-table-body">
</table>
<br>
  <div class="col-md-12"><form id="clear-records-form" method="post" action="clear_records.php">
  <button type="submit" class="btn btn-danger w-100">CLEAR RECORDS</button></div>
 

</form>

<br>

<span><button type="submit" class="btn btn-secondary w-100" id="generateReportSummary"> PRINT USAGE SUMMARY</button></span>
</div>

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
            $usagePercentage = ($totalUsed / 10470) * 100;
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
            <div class="progress-bar <?php echo $progressBarColor; ?>" id="cost-progress" role="progressbar" style="width: <?php echo $usagePercentage; ?>%;" aria-valuenow="<?php echo $totalUsed; ?>" aria-valuemin="0" aria-valuemax="3000"></div>
          </div>
          <br>
          <p class="alert alert-dark text-center">Reccomended target: 10,470 Litres/ Month<br></p>
          <a href="https://www.energysavingtrust.org.uk/sites/default/files/reports/AtHomewithWater%287%29.pdf" class="btn btn-dark w-100">Assumption: Daily Average Use for household = 349 litres</a>
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
            $costPercentage = ($totalCost / 485) * 100;
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
          <p class="alert alert-dark text-center">Reccomended target: 485 Ksh/ Month <br></p>
          <a href="https://www.kenyans.co.ke/news/85089-nairobi-water-announces-new-prices-penalties#:~:text=One%20cubic%20meter%20is%20equal,meters%20will%20be%20charged%20Ksh70.#" class="btn btn-dark w-100"> Assumption: 1 litre = 45 shillings/ 1000 Litres</a>
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
    <?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT water_usage_id, previous_reading, current_reading, cost_per_liter, `usage`, cost, created_at FROM water_usage";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
?>

<!-- First, include the Chart.js library in your HTML -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Next, add the canvas element to your HTML -->

    <div class="col-md-12">
      <div class="card">
        <div class="card-title text-center">
          WATER USAGE TREND <span class="fa fa-chart"></span>
        </div>
        <div class="card-body">
          <canvas id="waterUsageChart" width="900" height="400"></canvas>
     </div>
      </div>
    </div>
    <span><button type="submit" class="btn btn-success w-100" id="printChart">PRINT USAGE TREND</button></span>
<br>
<br>
<br>
    <div class="col-md-12">
      <div class="card">
        <div class="card-title text-center">
          COST ACCRUED TREND<span class="fa fa-chart"></span>
        </div>
        <div class="card-body">
          <canvas id="costChart" width="900" height="400"></canvas>
        </div>
      </div>
      <span><button type="submit" class="btn btn-danger w-100" id="forecast">  PRINT USAGE BILL</button></span>
    </div>



<!-- Finally, add the following PHP and JavaScript code to retrieve the data and create the chart -->
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

// Query the database to get the water usage data
$sql = "SELECT * FROM water_usage";
$result = $conn->query($sql);

// Initialize the arrays for the chart data
$labels = array();
$data = array();

// Fetch the data and add it to the arrays
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $labels[] = $row['created_at']; // Change 'date' to the name of the column that contains the date data
    $data[] = $row['usage']; // Change 'usage' to the name of the column that contains the usage data
  }
}

// Close the database connection
$conn->close();
?>

<script>
  // Get the canvas element and create the chart context
  var ctx = document.getElementById('waterUsageChart').getContext('2d');

  // Define the chart data and options
  var data = {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
      label: 'Water Usage',
      data: <?php echo json_encode($data); ?>,
      backgroundColor: 'black',
      borderWidth: 2,
      borderColor: 'green',
    }]
  };
  var options = {
    scales: {
      xAxes: [{
        display: true // add this line to hide the x-axis
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  };


  // Create the chart
  var waterUsageChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });
</script>

    <br>
    <!-- First, include the Chart.js library in your HTML -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Next, add the canvas element to your HTML -->


<!-- Finally, add the following PHP and JavaScript code to retrieve the data and create the chart -->
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

// Query the database to get the cost and created_at data
$sql = "SELECT cost, created_at FROM water_usage";
$result = $conn->query($sql);

// Initialize the arrays for the chart data
$labels = array();
$data = array();

// Fetch the data and add it to the arrays
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $labels[] = $row['created_at'];
    $data[] = $row['cost']/1000;
  }
}

// Close the database connection
$conn->close();
?>

<script>
  // Get the canvas element and create the chart context
  var ctx = document.getElementById('costChart').getContext('2d');

  // Define the chart data and options
  var data = {
    labels: <?php echo json_encode($labels); ?>,
    datasets: [{
      label: 'Cost',
      data: <?php echo json_encode($data); ?>,
      backgroundColor: 'black',
      borderWidth: 1
    }]
  };
  var options = {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  };

  // Create the chart
  var costChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
</script>
<script>
  
  document.getElementById('printChart').addEventListener('click', printWaterUsageChart);

  function printWaterUsageChart() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
  <!DOCTYPE html>
<html>

  <title>Water Usage Analysis Report</title>
  <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<body>
<style>
footer{
  background-color: black;
  color: white;
  text-align: center;
  padding: 10px;
}
body{
  background-color: white;
  color: black;
  padding: 20px;
    max-width: 800px;
    margin: 0 auto;
}
html{
  background-color: black;
  color: white;
}
  h2{
    text-align: center;
  }
  img { display: block; margin: 20px auto; width: 65%; }
}
  h2{
    text-align: center;
  }
  img { display: block; margin: 20px auto; width: 85%; }
</style>

  <h2 style="background-color:black;color:white;">
  <br>
  <br>
  <br>WATER USAGE ANALYSIS REPORT
  
  <br>
  <br>
  <br>
  </h2>
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
      
      // Query the database to get the water usage data
      $sql = "SELECT * FROM water_usage";
      $result = $conn->query($sql);
      
      // Initialize the variables for the highest and lowest usage and cost
      $highest_usage = 0;
      $highest_cost = 0;
      $lowest_usage = PHP_INT_MAX;
      $lowest_cost = PHP_INT_MAX;
      
      // Fetch the data and display it in the table
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          // Update the highest and lowest usage and cost variables
          if ($row['usage'] > $highest_usage) {
            $highest_usage = $row['usage'];
          }
          if ($row['usage'] < $lowest_usage) {
            $lowest_usage = $row['usage'];
          }
          if ($row['cost'] > $highest_cost) {
            $highest_cost = $row['cost'];
          }
          if ($row['cost'] < $lowest_cost) {
            $lowest_cost = $row['cost'];
          }

        }
      } else {
        echo "<p>No water usage data found. Please fill the data to have the Analysis</p>";
      }
      
      // Close the database connection
      $conn->close();
      ?>


<hr>
<h2>SUMMARY OF YOUR WATER USAGE  </h2>
 
<hr>
<p>Here is a breakdown of your usage so far!</p>
<ul>
  <li>Highest recorded usage: <span class="highlight"><?php echo $highest_usage; ?> litres</span></li>
  <li>Lowest recorded usage: <span class="highlight"><?php echo $lowest_usage; ?> litres</span></li>
  <li>Highest recorded cost: <span class="highlight"><?php echo $highest_cost; ?> Ksh </span></li>
  <li>Lowest recorded cost: <span class="highlight"><?php echo $lowest_cost; ?> Ksh </span></li>
</ul>

<hr>
<h3>Your Usage Trend</h3>
<hr>
<img src="${waterUsageChart.toBase64Image()}" alt="Water Usage Chart"/>
                <br>
<hr>
</body>
<button onclick="window.print();" class="btn no-print"><i class="fas fa-print"></i> Click here to Print</button>
<footer style="background-color:black;">
<br>
<p>By following the reccomended saving tips, you can make a big impact on your water usage and monthly bill while also helping the environment.</p>

  <p>Thank you for being a responsible water user!</p>
  <p>&copy; Water Usage Bill - Generated on <?php echo date("F j, Y"); ?></p>
</footer>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  @media print {
    .no-print {
        display: none;
    }
  h2 {
    color: #006699;
    font-size: 24px;
    margin-top: 0;
  }
  .highlight {
    font-weight: bold;
    color: #006699;
  }
  h3 {
    color: #006699;
    font-size: 20px;
    margin-top: 20px;
  }
  ul, ol {
    padding-left: 20px;
    margin-top: 10px;
  }
  li {
    margin-bottom: 5px;
  }
</style>
</html>

  `);
  printWindow.document.close();
}

  </script>
  <script>
  document.getElementById('forecast').addEventListener('click', printWaterUsageChart);

  function printWaterUsageChart() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
  <!DOCTYPE html>
<html>
<head>
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Water Usage Bill</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        header { background-color: black; color: white; padding: 5px 0; text-align: center; }
        h1 { font-size: 24px; margin-bottom: 0; }
        footer { background-color: black; color: white; padding: 20px 0; text-align: center; }
        p { font-size: 18px; margin-top: 0; text-align: left; }
        h3 { font-size: 20px; margin-bottom: 10px; }
        ol { font-size: 16px; }
        img { display: block; margin: 20px auto; width: 75%; }
        button { display: block; margin: 20px auto; font-size: 18px; }
        main { padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: grey; color: white; }
        html{ background-color: black;}
        body{ background-color:white;}
        @media print {
    .no-print {
        display: none;
    }
}

    </style>
</head>
<body>
    <header>
    <h1>OKOA MAJI PLATFORM</h1>
    <br>
        <h3>WATER BILL REPORT</h3>
       
    </header>
    <main>
    <?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE user_id = 1"; // Replace with the desired user ID
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch and display user information
    $row = $result->fetch_assoc();
    echo "<h3>User Information</h3>";
    echo "<p>Name: " . $row["first_name"] ." ".$row["last_name"] . "</p>";
    echo "<p>Email Address: " . $row["email"] . "</p>";
} else {
    echo "<p>No user information found.</p>";
}

$conn->close();
?>
        <h3>Bill Summary</h3>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th>Time and Date</th>
      <th>Usage</th>
      <th>Rate per unit</th>
      <th>Amount</th>
    </tr>
  </thead>
  <tbody>
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

    // Query the database to get the water usage data
    $sql = "SELECT * FROM water_usage";
    $result = $conn->query($sql);

    // Initialize the total variable
    $total = 0;

    // Fetch the data and display it in the table
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $amount = $row['cost']/1000 ; // Calculate the amount
        $total += $amount; // Add the amount to the total

        echo "<tr>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "<td>" . $row['cost'] . " litres"."</td>";
        echo "<td> 45 ksh</td>";
        echo "<td>KES " . number_format($amount, 2) . "</td>";
        echo "</tr>";
      }
    }

    // Close the database connection
    $conn->close();
    ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3" class="text-right"><strong>Total Amount Due:</strong></td>
      <td>KES <?php echo number_format($total, 2); ?></td>
    </tr>
  </tfoot>
</table>


<h3>Total Amount Due</h3>
<p><strong><?php echo number_format($total, 2); ?> KES</strong></p>  <button onclick="window.print();" class="btn no-print"><i class="fas fa-print"></i> Click here to Print</button>

    </main>
    <footer>
    <h5>By conserving water, you're not only helping the environment but also saving money on your monthly bill. Thank you for being a responsible water user!</h5>

        <h5>&copy; Water Usage Bill - Generated on ${new Date().toLocaleString()}</h5>
    </footer>
</body>
</html>

  `);
  printWindow.document.close();
}

  </script>
  <script>
  document.getElementById('generateReportSummary').addEventListener('click', printWaterUsageChart);

  function printWaterUsageChart() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
  <!DOCTYPE html>
<html>
<head>
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Print Current Bill</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        header { background: linear-gradient(180deg, #0077be 0%, #008ecc 50%, #00b8f0 100%); color: white; padding: 5px 0; text-align: center; }
        h1 { font-size: 24px; margin-bottom: 0; }
        footer { background: linear-gradient(180deg, #0077be 0%, #008ecc 50%, #00b8f0 100%); color: white; padding: 20px 0; text-align: center; }
        p { font-size: 18px; margin-top: 0; text-align: left; }
        h3 { font-size: 20px; margin-bottom: 10px; }
        ol { font-size: 16px; }
        img { display: block; margin: 20px auto; width: 75%; }
        button { display: block; margin: 20px auto; font-size: 18px; }
        main { padding: 20px; }
        table { border-collapse: collapse; width: 100%; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: linear-gradient(180deg, #0077be 0%, #008ecc 50%, #00b8f0 100%); color: white; }
        html{ background-color: white;}
        body{ background-color:white;}
        @media print {
    .no-print {
        display: none;
    }
}

    </style>
</head>
<body>
    <header>
    <h1>OKOA MAJI PLATFORM</h1>
    <br>
        <h3>WATER USAGE REPORT</h3>
       
    </header>
    <main>
    <?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users WHERE user_id = 1"; // Replace with the desired user ID
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch and display user information
    $row = $result->fetch_assoc();
    echo "<h3>User Information</h3>";
    echo "<p>Name: " . $row["first_name"] ." ".$row["last_name"] . "</p>";
    echo "<p>Email Address: " . $row["email"] . "</p>";
} else {
    echo "<p></p>";
}

$conn->close();
?>
        <h3>USAGE SUMMARY</h3>
        <table class="table table-bordered">
  <thead>
    <tr>
      <th>Time and Date</th>
      <th>Amount in Litres</th>
    </tr>
  </thead>
  <tbody>
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

    // Query the database to get the water usage data
    $sql = "SELECT * FROM water_usage";
    $result = $conn->query($sql);

    // Initialize the total variable
    $total = 0;

    // Fetch the data and display it in the table
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $amount = $row['usage'] ; // Calculate the amount
        $total += $amount; // Add the amount to the total

        echo "<tr>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "<td>" . $row['usage'] . " litres"."</td>";
        echo "</tr>";
      }
    }

    // Close the database connection
    $conn->close();
    ?>
  </tbody>
  <tfoot>
  <tr>
    <td class="text-right" style="width: 50%;"><strong>Total Amount Used:</strong></td>
    <td style="width: 50%;"><strong><span style="color:blue;"> <?php echo number_format($total, 2); ?></span> Litres</strong></td>
  </tr>
</tfoot>

</table>




<h3>Total Amount Used</h3>
<p style="color:blue;"><strong><?php echo number_format($total, 2); ?> Litres</strong></p>  <button onclick="window.print();" class="btn no-print"><i class="fas fa-print"></i> Click here to Print</button>

    </main>
    <footer>
    <h5>  Water is a precious resource, so let's all do our part to conserve it. <br>Remember to fix leaks, turn off taps when not in use, and use water-efficient appliances. <br>Together, we can ensure that we have a sustainable water supply for generations to come.</h5>

        <h5>&copy; Water Usage Summary - Generated on ${new Date().toLocaleString()}</h5>
    </footer>
</body>
</html>
  `);
  printWindow.document.close();
}

  </script>
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