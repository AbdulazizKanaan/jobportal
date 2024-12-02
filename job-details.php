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

  <div id="jobDetails" class="extra-space obj-width">

  </div>

  <!-- Footer  Section-->
  <?php include 'components/footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const urlParam = new URLSearchParams(window.location.search);
      const index = urlParam.get("id")

      const selectJob = jCategory[index];

      const jobDetailsContainer = document.getElementById("jobDetails")

      jobDetailsContainer.innerHTML = `
            <div class="job-header">
        <div class="job-img-row">
        <img src="${selectJob.image}" alt=""/>
        <div>
            <h2>${selectJob.companyName}</h2>
            <span>${selectJob.location}</span>
        </div>
    </div>
    <a id="g-btn" href="#">Apply Now</a>
    </div>
    <div class="features obj-width">
       
        <div class="fe-box">
          <div>
            <img src="../images/vacancy.png" alt="" />
            <h3>Vacancy</h3>
            <p> ${selectJob.vacancy}</p>
          </div>
  
          <div>
            <img src="../images/fe 1.png" alt="" />
            <h3>Position</h3>
            <p>${selectJob.title}</p>
          </div>
  
          <div>
            <img src="../images/hour.png" alt="" />
            <h3>Hours</h3>
            <p>${selectJob.hours}</p>
          </div>
  
          <div>
            <img src="../images/salary.png" alt="" />
            <h3>Salary</h3>
            <p>${selectJob.rate}</p>
          </div>
        </div>
    </div>
      
      <div class="job-description sec-space">
        <h3>Job Description</h3>
        <p>${selectJob.description}</p>

        <h3>Employment Status</h3>
        <p>${selectJob.av}</p>

        <h3>Workplace</h3>
        <p>${selectJob.workplace}</p>

        <h3>Educational Requirements</h3>
        <p>${selectJob.education}</p>

        <h3>Experience Requirements</h3>
        <p>${selectJob.experience}</p>
      </div> `
    });
  </script>
  <script src="js/job-list.js"></script>
  <script src="js/toggle.js"></script>
  <script src="js/jobSearch.js"></script>
</body>

</html>