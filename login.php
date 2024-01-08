<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="header max-w-[1920px] snipcss-q5WLJ snipcss-yVsgK">
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
        <!-- <button class="nav-btn sign-in" >Log in</button> -->
        <button class="nav-btn register" id="register">Register</button>
      </div>
    </div>
    <div class="booking-phase snipcss0-1-1-2 snipcss-t3ITg">
      <h2 class="snipcss0-2-2-3">Log In</h2>
      <form class="form snipcss0-2-2-4 snipcss0-0-0-1">
        <div class="form-phase snipcss0-3-4-5 snipcss0-1-1-2">
          <div class="input snipcss0-4-5-6 snipcss0-2-2-3">
            <label class="snipcss0-5-6-7 snipcss0-3-3-4">
              Username
              <span class="snipcss0-4-4-5"> * </span>
            </label>
            <input
              type="text"
              placeholder="Enter Username"
              class="snipcss0-3-3-6"
            />
          </div>
          <div class="input snipcss0-4-5-18 snipcss0-2-2-7">
            <label class="snipcss0-5-18-19 snipcss0-3-7-8">
              Email
              <span class="snipcss0-6-19-21 snipcss0-4-8-9"> * </span>
            </label>
            <input
              type="email"
              placeholder=" *****@gmail.com"
              class="snipcss0-3-7-10"
            />
          </div>
          <div class="input snipcss0-4-40-41 snipcss0-2-20-21">
            <label class="snipcss0-5-41-42 snipcss0-3-21-22">
              Password
              <span class="snipcss0-6-42-44 snipcss0-4-22-23"> * </span>
            </label>
            <input
              type="password"
              placeholder="Enter Password"
              class="snipcss0-3-21-24"
            />
          </div>
        </div>

        <div class="form-phase snipcss0-3-4-40 snipcss0-1-1-20">
          <div class="input snipcss0-4-40-52 snipcss0-2-20-25">
            <input
              type="button"
              class="select booking-btn snipcss0-5-52-53 snipcss0-3-25-26"
              value="Log In"
            />
          </div>
        </div>
        <div> Don't have an account?, <a href="signup.php">sign up</a></div>
      </form>
    </div>

    <script src="autenthicate.js" async defer></script>
  </body>
</html>
