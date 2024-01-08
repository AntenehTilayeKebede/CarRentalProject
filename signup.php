<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="signup.css" />
  </head>
  <body>
    <div class="header max-w-[1920px] snipcss-q5WLJ snipcss-ydQco">
      <a href="/">
        <img src="images\logo1.png" class="logo" />
      </a>
      <ul class="Nav-menu">
        <li>
          <a href="index.php"> Home </a>
        </li>
        <li>
          <a href="models.php"> Models </a>
        </li>
        <li>
          <a href="booking.php"> Booking </a>
        </li>
        <li>
          <a href="testimonials.php"> Testimonials </a>
        </li>
        <li>
          <a href="aboutus.php"> About Us </a>
        </li>
        <li>
          <a href="contactus.php"> Contact Us </a>
        </li>
      </ul>
      <div class="openNav">
        <svg
          stroke="currentColor"
          fill="currentColor"
          stroke-width="0"
          viewBox="0 0 448 512"
          height="28"
          width="28"
          xmlns="http://www.w3.org/2000/svg"
          style="color: rgb(0, 0, 0); cursor: pointer"
        >
          <path
            d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
          ></path>
        </svg>
      </div>
      <div class="nav-btns">
        <button class="nav-btn sign-in" id="login">Log in</button>
        <!-- <button class="nav-btn register" id="register">Register</button> -->
      </div>
    </div>
    <div class="booking-card snipcss0-0-0-1 snipcss-H29Ye">
      <div class="booking-phase snipcss0-1-1-2">
        <h2 class="snipcss0-2-2-3">Sign Up</h2>
        <form method="post" class="form snipcss0-2-2-4" id="myForm" name="theForm">
          <div class="form-phase snipcss0-3-4-5">
            <div class="input snipcss0-4-5-6">
              <label class="snipcss0-5-6-7" for="First_Name">
                First Name
                <span> * </span>
              </label>
              <input
                type="text"
                placeholder="Enter First Name"
                name="First_Name"
                id="First_Name"
              />
            </div>
            <div class="input snipcss0-4-5-18">
              <label class="snipcss0-5-18-19" for="Last_Name">
                Last Name
                <span class="snipcss0-6-19-21"> * </span>
              </label>
              <input
                type="text"
                placeholder="Enter Last Name"
                name="Last_Name"
                id="Last_Name"
              />
            </div>
            <div class="input snipcss0-4-5-18">
              <label class="snipcss0-5-18-19" for="Username">
                Username
                <span class="snipcss0-6-19-21"> * </span>
              </label>
              <input
                type="text"
                placeholder="E.g: @groupfive11"
                name="Username"
                id="Username"
              />
            </div>
          </div>
          <div class="form-phase snipcss0-3-4-23">
            <div class="input snipcss0-4-23-24">
              <label class="snipcss0-5-24-25" for="Birth_Date">
                Birth-Date
                <span class="snipcss0-6-25-27"> * </span>
              </label>
              <input type="date" name="Birth_Date" id="Birth_Date" />
            </div>
            <div class="input snipcss0-4-23-35">
              <label class="snipcss0-5-35-36" for="Email">
                Email
                <span class="snipcss0-6-36-38"> * </span>
              </label>
              <input
                type="text"
                class="select snipcss0-5-35-39"
                placeholder=" ******@gmail.com"
                name="Email"
                id="Email"
              />
            </div>
          </div>
          <div class="form-phase snipcss0-3-4-40">
            <div class="input snipcss0-4-40-41">
              <label class="snipcss0-5-41-42" for="Password">
                Password
                <span class="snipcss0-6-42-44"> * </span>
              </label>
              <input
                type="text"
                placeholder="Enter Password"
                name="Password"
                id="Password"
              />
            </div>
            <div class="input snipcss0-4-40-52">
              <input
                type="submit"
                class="select booking-btn snipcss0-5-52-53"
                value="Sign Up"
                name="save"
              />
            </div>
          </div>
        </form>
      </div>
    </div>
     <?php
if (isset($_POST['save'])) {
    $firstName=$_POST["First_Name"];
    $lastName=$_POST['Last_Name'];
    $username=$_POST['Username'];
    $birthDate=$_POST['Birth_Date'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
}
    //database connection
    $conn=new mysqli('localhost','root','','rental_service');
    if($conn->connect_error){
      die('connection Failed: '.$conn->connect_error);
      
    } else {
      $stmt=$conn->prepare("INSERT INTO clients (firstName, lastName, username, birthDate, email, password ) values (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $firstName, $lastName, $username, $birthDate, $email, $password);
      $stmt->execute();
      echo "successfully Signed Up";
      $stmt->close();
      $conn->close();
    }
    ?>
    <script>
      document.getElementById("login").addEventListener("click", function () {
        // Redirect to signup.php
        window.location.href = "login.php";
      });
    </script>
  </body>
</html>
