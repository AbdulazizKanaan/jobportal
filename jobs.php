<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>JobQuestify - Search Jobs</title>
  <link rel="stylesheet" href="css/style.css" />
   <link rel="stylesheet" href="css/navbar.css" />
   <link rel="stylesheet" href="css/footer.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

  <!-- Header  Section-->
  <?php include 'components/user_header.php'; ?>

  <!-- Job Listing  Section-->
  <section class="jobs sec-space obj-width extra-space">
    <h2>Jobs in demand</h2>
    <p>Most viewed and all-time top-selling services</p>

    <form>
      <i class='bx bx-search'></i>
      <input type="text" placeholder="Search Jobs" id="searchBar">
    </form>

    <div class="jobs-container" id="root">

    </div>
  </section>


  <!-- Footer  Section-->
  <?php include 'components/footer.php'; ?>

  <script src="js/job-list.js"></script>
  <script src="js/toggle.js"></script>
  <script src="js/jobSearch.js"></script>
</body>

</html>