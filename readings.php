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
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="readings.php">
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
        <a class="nav-link collapsed" href="askmaji.php">
          <i class="bi bi-robot"></i>
          <span>Ask Maji</span>
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

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary mt-3 w-100" data-bs-toggle="modal" data-bs-target="#timerModal">Click to Set a reminder</button>
        <p class="mt-3">Time remaining until next record: <span id="timeRemaining">you have not set a time interval!</span></p>
    </div>

    <div class="modal fade" id="timerModal" tabindex="-1" aria-labelledby="timerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="timerModalLabel">This timer reminds you to record your usage data after a set period</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="timerInput">Enter the interval in minutes:</label>
                    <input type="number" class="form-control" id="timerInput" min="1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="saveBtn">Save</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const timerInput = document.getElementById("timerInput");
        const saveBtn = document.getElementById("saveBtn");
        const timeRemaining = document.getElementById("timeRemaining");
        let countdown;
        let timerAlert;

        function updateRemainingTime(seconds) {
            const minutes = Math.floor(seconds / 60);
            const remainingSeconds = seconds % 60;
            timeRemaining.textContent = `${minutes}m ${remainingSeconds}s`;
        }

        saveBtn.addEventListener("click", () => {
            const minutes = parseInt(timerInput.value);
            if (minutes > 0) {
                if (countdown) {
                    clearInterval(countdown);
                }
                if (timerAlert) {
                    clearTimeout(timerAlert);
                }
                const endTime = Date.now() + minutes * 60 * 1000;
                let remainingSeconds = minutes * 60;

                updateRemainingTime(remainingSeconds);

                countdown = setInterval(() => {
                    remainingSeconds--;
                    updateRemainingTime(remainingSeconds);

                    if (remainingSeconds <= 0) {
                        clearInterval(countdown);
                        timeRemaining.textContent = "Time's up! set a new interval";
                        showAlert();
                    }
                }, 1000);

                timerAlert = setTimeout(() => {
                    clearInterval(countdown);
                }, minutes * 60 * 1000);

                const timerModal = bootstrap.Modal.getInstance(document.getElementById('timerModal'));
                timerModal.hide();
            }
        });

        function showAlert() {
            const alertContainer = document.createElement('div');
            alertContainer.innerHTML = `
                <div class="alert alert-dismissible alert-danger fixed-top m-3" role="alert">
                   Hello there! It's time to record your usage data. Constant recording will help you keep track of your usage and help you save more.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            `;

            document.body.appendChild(alertContainer);
        }
    </script>
</body>


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
    <label for="cost-per-liter">COST IN KSH:</label>
    <input type="number" class="form-control" id="cost-per-liter" name="cost_per_liter" value="<?php echo $row['cost_per_liter'] ?>"  step="any" required>
  </div>
  <br>
  <button type="submit" class="btn btn-success w-100">UPDATE RECORD</button>

</form>
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
  <div class="col-md-12"><form id="clear-records-form" method="post" action="clear_records.php">
  <button type="submit" class="btn btn-danger w-100">CLEAR RECORDS</button></div>

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
          <p class="alert alert-info">Reccomended target: 6,000 Litres/ Month</p>
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
    <?php
$servername = "localhost";
$username = "admin";
$password = "admin1234";
$dbname = "okoamaji";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, previous_reading, current_reading, cost_per_liter, `usage`, cost, created_at FROM water_usage";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
?>

<script>
    var waterUsageData = <?php echo json_encode($data); ?>;
</script>
<div class="card"><br>
<div class="alert text-center" role="alert"><p><b>WATER USAGE TREND CHART <i class="fas fa-chart-line"></i></p></div>
  <div class="row-md-12">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        

    <canvas id="waterUsageChart" width="800" height="400"></canvas>
    <br>
    <br>
    </div>
    </div>
    <br>
    <div class="alert alert-info text-center" role="alert"><i class="fa fa-print"></i> PRINT REPORTS BELOW</div>

    <span><button type="submit" class="btn btn-dark w-100" id="printChart">PRINT USAGE TREND</button></span>
    <br>
    <br>
    <span><button type="submit" class="btn btn-success w-100" id="generateReport">  PRINT USAGE SUMMARY</button></span>
    <br>
    <br>
    <span><button type="submit" class="btn btn-danger w-100" id="forecast">  PRINT CURRENT BILL</button></span>
    <br>
    <br>
    <script src="charts.js"></script>

<br>

<script>
  
  document.getElementById('printChart').addEventListener('click', printWaterUsageChart);

  function printWaterUsageChart() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
    <html>
    <link href="assets/img/favicon.png" rel="icon">
        <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <title>Print Usage Trend</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 0; }
                header { background-color: #3f51b5; color: white; padding: 15px 0; text-align: center; }
                h1 { font-size: 24px; margin-bottom: 0; }
                footer { background-color: #3f51b5; color: white; padding: 40px 0; text-align: center; }
                p { font-size: 18px; margin-top: 0; text-align: center; }
                h3 { font-size: 20px; margin-bottom: 10px; }
                ol { font-size: 16px; }
                img { display: block; margin: 20px auto; width: 75%; }
                button { display: block; margin: 20px auto; font-size: 18px; }
                main { padding: 20px; }
            </style>
        </head>
        <body>
            <header>
                <h1>USAGE TREND - OKOA MAJI APP</h1><button onclick="window.print();" class="btn"><i class="fas fa-print"></i></button>
            </header>
            <main>
                <p>This chart represents the amount of water used (in litres) at different times and dates and helps you keep track of your usage trends.</p>
              
                <hr>
                
                <img src="${waterUsageChart.toBase64Image()}" alt="Water Usage Chart"/>
                <br>
                <hr>
                
                <h3>Recommendations on How to Save Water:</h3>
                <ol>
                  <li>Turn off the tap while brushing your teeth or washing your face.</li>
                  <li>Fix any leaks in your home promptly.</li>
                  <li>Install water-saving showerheads and faucet aerators.</li>
                  <li>Only run the dishwasher and washing machine with full loads.</li>
                  <li>Collect rainwater for watering plants.</li>
                  <li>Water your garden during the early morning or late evening to reduce evaporation.</li>
                </ol>
            </main>
            <footer>
                <p>&copy; Water Usage Report - Generated on ${new Date().toLocaleString()}</p>
            </footer>
        </body>
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
    <title>Print Current Bill</title>
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
        @media print {
    .no-print {
        display: none;
    }
}

    </style>
</head>
<body>
    <header>
        <h1>Water Usage Bill</h1>
        <button onclick="window.print();" class="btn no-print"><i class="fas fa-print"></i> Click here to Print</button>
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
$sql = "SELECT * FROM users WHERE id = 19"; // Replace with the desired user ID
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch and display user information
    $row = $result->fetch_assoc();
    echo "<h3>Customer Information</h3>";
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
            <th>Service Period</th>
            <th>Usage (Gallons)</th>
            <th>Rate per 1000 Gallons</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>01/01/2023 - 01/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>01/01/2023 - 01/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>01/01/2023 - 01/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>02/01/2023 - 02/28/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <!-- ... -->
        <tr>
            <td>12/01/2023 - 12/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>01/01/2024 - 01/31/2024</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>02/01/2024 - 02/28/2024</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
        <tr>
            <td>03/01/2023 - 03/31/2023</td>
            <td>6,000</td>
            <td>KES 3.50</td>
            <td>KES 21.00</td>
        </tr>
    </tbody>
</table>

<h3>Total Amount Due</h3>
<p><strong>KES 315.00</strong></p>

    </main>
    <footer>
        <h5>&copy; Water Usage Bill - Generated on ${new Date().toLocaleString()}</h5>
    </footer>
</body>
</html>

  `);
  printWindow.document.close();
}

  </script>
  <script>
  document.getElementById('generateReport').addEventListener('click', printWaterUsageChart);

  function printWaterUsageChart() {
  var printWindow = window.open('', '_blank');
  printWindow.document.write(`
    <html>
    <link href="assets/img/favicon.png" rel="icon">
        <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <title>Print Usage Summary</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 0; }
                header { background-color: #3f51b5; color: white; padding: 15px 0; text-align: center; }
                h1 { font-size: 24px; margin-bottom: 0; }
                footer { background-color: #3f51b5; color: white; padding: 40px 0; text-align: center; }
                p { font-size: 18px; margin-top: 0; text-align: center; }
                h3 { font-size: 20px; margin-bottom: 10px; }
                ol { font-size: 16px; }
                img { display: block; margin: 20px auto; width: 75%; }
                button { display: block; margin: 20px auto; font-size: 18px; }
                main { padding: 20px; }
            </style>
        </head>
        <body>
            <header>
                <h1>USAGE TREND - OKOA MAJI APP</h1><button onclick="window.print();" class="btn"><i class="fas fa-print"></i></button>
            </header>
            <main>
                <p>This chart represents the amount of water used (in litres) at different times and dates and helps you keep track of your usage trends.</p>
              
                <hr>
                <img src="${waterUsageChart.toBase64Image()}" alt="Water Usage Chart"/>
                <br>
                <hr>
                
                <h3>Recommendations on How to Save Water:</h3>
                <ol>
                  <li>Turn off the tap while brushing your teeth or washing your face.</li>
                  <li>Fix any leaks in your home promptly.</li>
                  <li>Install water-saving showerheads and faucet aerators.</li>
                  <li>Only run the dishwasher and washing machine with full loads.</li>
                  <li>Collect rainwater for watering plants.</li>
                  <li>Water your garden during the early morning or late evening to reduce evaporation.</li>
                </ol>
            </main>
            <footer>
                <p>&copy; Water Usage Report - Generated on ${new Date().toLocaleString()}</p>
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