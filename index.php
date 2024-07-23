<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TANCET Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }

    .gradient-bg {
      background: #86e3ce;
      background-size: 800% 800%;
      animation: gradient 15s ease infinite;
    }

    .gradient-bg:hover {
      background: linear-gradient(270deg, #ff7e5f, #feb47b, #86e3ce, #9bafd9);
      background-size: 800% 800%;
      animation: gradient 15s ease infinite;
    }
  </style>
  <style>
    a {
      text-decoration: none;
    }
  </style>

</head>
<?php
include("navbar.php");
include("conn.php");
?>

<body class="bg-gray-100">


  <!-- Header Section -->
  <header class="gradient-bg text-white py-6">
    <div class="container mx-auto text-center">
      <h1 class="text-4xl font-bold">What is TANCET?</h1>
      <p class="mt-4 text-lg">Tamil Nadu Common Entrance Test (TANCET) is an entrance exam for postgraduate programs.</p>
    </div>
  </header>

  <!-- About TANCET Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">About TANCET</h2>
      <p class="mt-4 text-gray-600 text-center">
        TANCET is conducted by Anna University for admission to MBA, MCA, M.E., M.Tech., M.Arch., and M.Plan programs in colleges across Tamil Nadu.
      </p>
    </div>
  </section>

  <!-- Buttons Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-semibold text-gray-800">Explore TANCET</h2>
      <div class="mt-8 flex flex-col md:flex-row justify-center gap-8">
        <a href="findCollege.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          Find the Suitable College for My Rank
        </a>
        <a href="check_previous_data.php" class="bg-green-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          College Previous Years Rank Details
        </a>
        <a href="checkMyCollege.php" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg" style="text-decoration: none;">
          Check My Eligibility for Particular College
        </a>
      </div>
    </div>
  </section>

  <!-- Uses of TANCET Section -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">Uses of TANCET</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Postgraduate Admissions</h3>
          <p class="mt-4 text-gray-600 text-justify">
            TANCET scores are used for admission to postgraduate programs in various colleges across Tamil Nadu. The exam assesses candidates' knowledge and skills in subjects pertinent to their chosen field, with programs including Master of Computer Applications (MCA), Master of Business Administration (MBA), and Master of Engineering (ME). These scores are critical for securing a place in universities, government, and self-financing engineering colleges, making TANCET a vital step for students aspiring to advanced education in Tamil Nadu.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Scholarship Eligibility</h3>
          <p class="mt-4 text-gray-600 text-justify">
            High TANCET scores can help students qualify for scholarships and financial aid. Many institutions offer merit-based scholarships to students who perform exceptionally well in the TANCET exam, easing the financial burden of pursuing postgraduate education. These scholarships not only recognize academic excellence but also provide opportunities for students to access quality education and enhance their career prospects.
          </p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h3 class="text-xl font-bold text-teal-500">Career Advancement</h3>
          <p class="mt-4 text-gray-600 text-justify">
            Graduating from a prestigious institution through TANCET can significantly enhance career opportunities and professional growth. A degree from a well-regarded college often opens doors to high-profile job positions and competitive salary packages. Additionally, it provides access to a valuable network of alumni and industry connections, which can be instrumental in advancing one’s career. The reputation of the institution can also boost credibility and recognition in the professional world, paving the way for long-term career success and development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Famous Colleges Section -->
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-semibold text-center text-gray-800">Famous Colleges Appearing for TANCET</h2>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://images.collegedunia.com/public/college_data/images/appImage/25863_cover.jpg?h=260&w=360&mode=crop" alt="Anna University" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Anna University</h3>
            <p class="mt-4 text-gray-600">
              A premier institution known for its excellence in engineering and technology education.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://www.psgtech.edu/Glances/images/Pics/Footer/DSC_0040.JPG" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">PSG College of Technology</h3>
            <p class="mt-4 text-gray-600">
              Renowned for its engineering programs and industry connections.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3G_ax02P3o4v0DLr8_pJcT9BxzLQeyPJ4pg&s" alt=" Loyola College" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Loyola College</h3>
            <p class="mt-4 text-gray-600">
              Known for its management and arts programs with a strong emphasis on academic excellence.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://media.getmyuni.com/azure/college-image/big/psg-college-of-arts-and-science-psgcas-coimbatore.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">PSG Arts and Science</h3>
            <p class="mt-4 text-gray-600">
              Celebrated for its top-notch education and extensive network with professionals.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://www.kongu.ac.in/webalbum/img/mba.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Kongu Engineering College</h3>
            <p class="mt-4 text-gray-600">
              Famed for its leading-edge curriculum and robust ties to the business world.
            </p>
          </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <img src="https://content.jdmagicbox.com/comp/erode/56/9999pmulchnstd2800056/catalogue/kongu-arts-and-science-college-erode-ho-erode-colleges-yzvrm7i.jpg" alt="PSG College of Technology" class="w-full h-48 object-cover rounded-t-lg">
          <div class="p-4">
            <h3 class="text-xl font-bold text-blue-500">Kongu Arts and Science College</h3>
            <p class="mt-4 text-gray-600">
              Esteemed for its exceptional academic offerings and valuable industry partnerships.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-sm">&copy; MCA Guide. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>

<?php


function getUserIP()
{
  // Get the IP address from shared internet
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  }
  // Get the IP address from a proxy server
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  // Get the IP address from remote address
  else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

$ip_address = getUserIP();

// Check if the IP address exists in the database
$sql = "SELECT * FROM visitors WHERE ip_address = '$ip_address'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // IP address exists, update the visit count
  $sql = "UPDATE visitors SET visit_count = visit_count + 1, last_visit = CURRENT_TIMESTAMP WHERE ip_address = '$ip_address'";
  if ($con->query($sql) === TRUE) {
    // Successfully updated count
  } else {
    echo "Error updating record: " . $con->error;
  }
} else {
  // IP address does not exist, insert a new record
  $sql = "INSERT INTO visitors (ip_address, visit_count) VALUES ('$ip_address', 1)";
  if ($con->query($sql) === TRUE) {
    // New visitor recorded successfully
  } else {
    echo "Error inserting record: " . $con->error;
  }
}

// Fetch visitor count
$sql = "SELECT SUM(visit_count) AS total_visits FROM visitors";
$result = $con->query($sql);

$total_visits = 0;
if ($result->num_rows > 0) {
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    $total_visits = $row["total_visits"];
  }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Counter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="mb-4">Visitor Counter</h1>
        <p class="fs-4">Total Visitors: <strong><?php echo $total_visits; ?></strong></p>
    </div>
</body>

</html> -->


<?php $con->close(); ?>