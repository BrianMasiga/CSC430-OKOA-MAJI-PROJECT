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
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">ESTIMATED BILL</h1>
            <p class="card-text">Estimated Cost: Ksh <span id="total-cost">0.00</span></p>
            <div class="progress">
              <div class="progress-bar" id="cost-progress" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <label for="target-cost">Target Cost (Ksh):</label>
            <input type="number" class="form-control" id="target-cost" step="0.01" required>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">TOTAL AMOUNT OF WATER USED</h1>
            <p class="card-text">Volume Used: <span id="total-water">0.00</span></p>
            <div class="progress">
              <div class="progress-bar" id="water-progress" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <label for="target-use">Target Water Usage (Litres):</label>
            <input type="number" class="form-control" id="target-use" step="0.01" required>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container mt-4 mb-4">
    <div class="alert alert-success text-center" role="alert">
      The section below allows you to feed in the meter readings and records them in real time.
    </div>  
    <h5 class="alert alert-info text-center" role="alert"> RECORD YOUR READINGS IN REAL-TIME:<span class="blinking-dot"></span></h5>
    <form id="water-usage-form">
      <div class="form-group">
        <label for="last-read">PREVIOUS READING:</label>
        <input type="number" class="form-control" id="last-read" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="current-read">CURRENT READING:</label>
        <input type="number" class="form-control" id="current-read" step="0.01" required>
      </div>
      <div class="form-group">
        <label for="cost-per-liter">COST PER LITRE:</label>
        <input type="number" class="form-control" id="cost-per-liter" step="0.01" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">RECORD</button>
    </form>
    <br>
    <hr>
    <div class="alert alert-info text-center" role="alert">
      <b>REAL-TIME RECORDS</b>
    </div> 
    <table class="table table-bordered table-striped"id="report-table">
      <thead>
        <tr>
          <th scope="col">DATE & TIME OF RECORDING</th>
          <th scope="col">INITIAL VALUE</th>
          <th scope="col">CURRENT VALUE</th>
          <th scope="col">AMOUNT USED</th>
          <th scope="col">COST</th>
        </tr>
      </thead>
      <tbody id="report-table-body"></tbody>
    </table>
    <button  id="print-button" class="btn btn-secondary">PRINT USAGE REPORT</button>
    <br>
    <hr> 
</div>
</body>
      </body>
    <div class="container">
      <body>  
          <div class="alert alert-dark text-center" role="alert">
            Average Household Water Usage Chart          </div> 
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">Activity</th>
                <th scope="col">Water Usage (Liters) - Min</th>
                <th scope="col">Water Usage (Liters) - Max</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Shower (10 minutes)</td>
                <td>80</td>
                <td>200</td>
              </tr>
              <tr>
                <td>Bath</td>
                <td>150</td>
                <td>200</td>
              </tr>
              <tr>
                <td>Hand washing (per minute)</td>
                <td>4</td>
                <td>8</td>
              </tr>
              <tr>
                <td>Toilet flush (standard)</td>
                <td>9</td>
                <td>12</td>
              </tr>
              <tr>
                <td>Toilet flush (low-flow)</td>
                <td>4.5</td>
                <td>6</td>
              </tr>
              <tr>
                <td>Dishwasher (full cycle)</td>
                <td>40</td>
                <td>60</td>
              </tr>
              <tr>
                <td>Washing machine (full load)</td>
                <td>50</td>
                <td>150</td>
              </tr>
              <tr>
                <td>Brushing teeth (tap running)</td>
                <td>6</td>
                <td>12</td>
              </tr>
              <tr>
                <td>Watering garden (hose, 30 minutes)</td>
                <td>450</td>
                <td>900</td>
              </tr>
              <tr>
                <td>Drinking water (per person, daily)</td>
                <td>2</td>
                <td>3</td>
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
      background: #8fd3f4;
    }
    @media print {
  #print-button {
    display: none;
  }
}

  </style>
    <!-- Add jQuery, Chart.js and Bootstrap JS for functionality -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      
document.getElementById('water-usage-form').addEventListener('submit', function (event) {
  event.preventDefault();

  const lastRead = parseFloat(document.getElementById('last-read').value);
  const currentRead = parseFloat(document.getElementById('current-read').value);
  const costPerLiter = parseFloat(document.getElementById('cost-per-liter').value);

  if (currentRead < lastRead) {
    alert('Current reading cannot be less than the previous reading.');
    return;
  }

  const amountUsed = currentRead - lastRead;
  const cost = amountUsed * costPerLiter;

  const totalWater = parseFloat(document.getElementById('total-water').innerText);
  const totalCost = parseFloat(document.getElementById('total-cost').innerText);

  document.getElementById('total-water').innerText = (totalWater + amountUsed).toFixed(2);
  document.getElementById('total-cost').innerText = (totalCost + cost).toFixed(2);

  const newRow = document.createElement('tr');
  newRow.innerHTML = `
    <td>${new Date().toLocaleString()}</td>
    <td>${lastRead.toFixed(2)}</td>
    <td>${currentRead.toFixed(2)}</td>
    <td>${amountUsed.toFixed(2)}</td>
    <td>${cost.toFixed(2)}</td>
  `;
  document.getElementById('report-table-body').appendChild(newRow);

  updateProgressBar('total-cost', 'target-cost', 'cost-progress');
  updateProgressBar('total-water', 'target-use', 'water-progress');
});

function updateProgressBar(currentId, targetId, progressId) {
  const current = parseFloat(document.getElementById(currentId).innerText);
  const target = parseFloat(document.getElementById(targetId).value);

  if (isNaN(target) || target <= 0) {
    return;
  }

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
}

document.getElementById('target-cost').addEventListener('input', function () {
  updateProgressBar('total-cost', 'target-cost', 'cost-progress');
});

document.getElementById('target-use').addEventListener('input', function () {
  updateProgressBar('total-water', 'target-use', 'water-progress');
});
document.getElementById('print-button').addEventListener('click', function () {
  const table = document.getElementById('report-table-body').parentElement;

  // Add total cost and total usage rows to the end of the table
  const totalWater = parseFloat(document.getElementById('total-water').innerText);
  const totalCost = parseFloat(document.getElementById('total-cost').innerText);
  const totalRow = document.createElement('tr');
  totalRow.innerHTML = `
    <td colspan="3"><b>Total Usage</b></td>
    <td><b>${totalWater.toFixed(2)}</b></td>
    <td><b>${totalCost.toFixed(2)}</b></td>
  `;
  table.appendChild(totalRow);

  // Open print dialog
  window.print();

  // Remove total cost and total usage rows from the table
  table.removeChild(totalRow);
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>