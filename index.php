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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" integrity="..." crossorigin="anonymous" />


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
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="readings.php">
          <i class="bi bi-bar-chart"></i>
          <span>Analysis</span>
        </a>
        </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="articles.php">
          <i class="bi bi-list"></i>
          <span>Articles</span>
        </a>
      </li>
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
  <div class="container mt-4 mb-4">
    <p class="alert alert-info text-center" role="alert">
     HELLO! WELCOME TO THE OKOA MAJI APP  
          </p>  
          <p class="card-title">THIS PLATFORM HELPS YOU TO:</p>
          <ul class="list-unstyled alert alert-success">
  <li><i class="fas fa-check"></i> Monitor and track your water usage.</li>
  <li><i class="fas fa-check"></i> Provide you with real-time visual information on your water consumption and estimated bills.</li>
  <li><i class="fas fa-check"></i> Adopt more water-efficient behaviours and reduce water waste through articles.</li>
  <li><i class="fas fa-check"></i> generate reports on your usage trends so as to help you make more informed decisions based on your data.</li>
  <li><i class="fas fa-check"></i> Keep track and stay within budget by setting cost and usage targets and help them work towards saving more water and, in turn, money.</li>
</ul>
          <div class="card rounded-3">
            <img src="https://www.cairowestmag.com/wp-content/uploads/2021/04/how-to-save-water-infographic.jpg" class="card-img-top rounded-3" alt="...">        
          </div>
     <p class="alert alert-danger text-left" role="alert">
        Keeping track of how much water is consumed in a homestead or any setup is a vital part of the efforts
        made in conservation. 
        <br>
        In households and industrial settings, monitoring and understanding water usage patterns
        is crucial to reduce waste and conserving resources. 
        This platform helps you track and analyze water usage in real-time.
        </p>  
        <br>
        <div class="card rounded-3">
        <iframe style="border-radius: 20px;" src="https://www.youtube.com/embed/4MDLpVHY8LE" height="700px" allowfullscreen></iframe>
          </div>
    
  
  </div>
</div>
</body>  
      </body>
    <div class="container">     
            </div>
          </div>
        </div>
        <div class="col-lg-4">
        </div>
      </div>
    </section>
  </main>
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
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>