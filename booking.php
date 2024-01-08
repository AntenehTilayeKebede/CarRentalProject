<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="booking.css" />
  </head>
  <body>
    <div class="header max-w-[1920px] snipcss-q5WLJ snipcss-azA7d">
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
        <div class="nav-btns">
          <button class="nav-btn sign-in" href="login.php">Log In</button>
          <button class="nav-btn register" href="signup.php">Register</button>
        </div>
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
        <button class="nav-btn register" id="register">Register</button>
      </div>
    </div>
    <div class="booking-card snipcss-se5j4">
      <div class="booking-phase">
        <h2>Book a car</h2>
        <form class="form">
          <div class="form-phase">
            <div class="input">
              <label>
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="20"
                  width="20"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: var(--primary-color)"
                >
                  <path
                    d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"
                  ></path>
                </svg>
                Select Your Car Type
                <span> * </span>
              </label>
              <select class="select">
                <option value="Select your car type">
                  Select your car type
                </option>
                <option value="Audi Q8 e-tron">Audi Q8 e-tron</option>
                <option value="BMW 5 Series">BMW 5 Series</option>
                <option value="Mercedes-Benz CLA">Mercedes-Benz CLA</option>
                <option value="Toyota GR Supra">Toyota GR Supra</option>
                <option value="Ford Mustang">Ford Mustang</option>
                <option value="Lexus 2018">Lexus 2018</option>
              </select>
            </div>
            <div class="input">
              <label>
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 448 512"
                  height="20"
                  width="20"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: var(--primary-color)"
                >
                  <path
                    d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"
                  ></path>
                </svg>
                Pick-up Date
                <span> * </span>
              </label>
              <input type="date" class="select" />
            </div>
          </div>
          <div class="form-phase">
            <div class="input">
              <label>
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="20"
                  width="20"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: var(--primary-color)"
                >
                  <path
                    d="M505.04 442.66l-99.71-99.69c-4.5-4.5-10.6-7-17-7h-16.3c27.6-35.3 44-79.69 44-127.99C416.03 93.09 322.92 0 208.02 0S0 93.09 0 207.98s93.11 207.98 208.02 207.98c48.3 0 92.71-16.4 128.01-44v16.3c0 6.4 2.5 12.5 7 17l99.71 99.69c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.59.1-33.99zm-297.02-90.7c-79.54 0-144-64.34-144-143.98 0-79.53 64.35-143.98 144-143.98 79.54 0 144 64.34 144 143.98 0 79.53-64.35 143.98-144 143.98zm.02-239.96c-40.78 0-73.84 33.05-73.84 73.83 0 32.96 48.26 93.05 66.75 114.86a9.24 9.24 0 0 0 14.18 0c18.49-21.81 66.75-81.89 66.75-114.86 0-40.78-33.06-73.83-73.84-73.83zm0 96c-13.26 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"
                  ></path>
                </svg>
                Pick-up
                <span> * </span>
              </label>
              <select class="select">
                <option value="Select your car type">
                  Select pick up location
                </option>
                <option value="Audi Q8 e-tron">Ikeja-Lagos</option>
                <option value="BMW 5 Series">Osogbo-Osogbo</option>
                <option value="Mercedes-Benz CLA">Oyo-Ibadan</option>
                <option value="Toyota GR Supra">Ondo-Akure</option>
                <option value="Ford Mustang">Ogun-Ijebu</option>
              </select>
            </div>
            <div class="input">
              <label>
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 448 512"
                  height="20"
                  width="20"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: var(--primary-color)"
                >
                  <path
                    d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"
                  ></path>
                </svg>
                Drop-off Date
                <span> * </span>
              </label>
              <input type="date" class="select" />
            </div>
          </div>
          <div class="form-phase">
            <div class="input">
              <label>
                <svg
                  stroke="currentColor"
                  fill="currentColor"
                  stroke-width="0"
                  viewBox="0 0 512 512"
                  height="20"
                  width="20"
                  xmlns="http://www.w3.org/2000/svg"
                  style="color: var(--primary-color)"
                >
                  <path
                    d="M505.04 442.66l-99.71-99.69c-4.5-4.5-10.6-7-17-7h-16.3c27.6-35.3 44-79.69 44-127.99C416.03 93.09 322.92 0 208.02 0S0 93.09 0 207.98s93.11 207.98 208.02 207.98c48.3 0 92.71-16.4 128.01-44v16.3c0 6.4 2.5 12.5 7 17l99.71 99.69c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.59.1-33.99zm-297.02-90.7c-79.54 0-144-64.34-144-143.98 0-79.53 64.35-143.98 144-143.98 79.54 0 144 64.34 144 143.98 0 79.53-64.35 143.98-144 143.98zm.02-239.96c-40.78 0-73.84 33.05-73.84 73.83 0 32.96 48.26 93.05 66.75 114.86a9.24 9.24 0 0 0 14.18 0c18.49-21.81 66.75-81.89 66.75-114.86 0-40.78-33.06-73.83-73.84-73.83zm0 96c-13.26 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"
                  ></path>
                </svg>
                Drop-off
                <span> * </span>
              </label>
              <select class="select">
                <option value="Select your car type">
                  Select drop off location
                </option>
                <option value="Audi Q8 e-tron">Ede - Osun state</option>
                <option value="BMW 5 Series">Oye - Ekiti state</option>
                <option value="Mercedes-Benz CLA">Oyo-Ogbomoso</option>
                <option value="Toyota GR Supra">Delta</option>
                <option value="Ford Mustang">Festac</option>
              </select>
            </div>
            <div class="input">
              <input type="button" class="select booking-btn" value="Book" />
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="footer-section snipcss-hGlNw snipcss-mNOsb">
      <div class="footer-con">
        <div class="footer-box fb-1">
          <h3>
            CAR
            <span> Rental </span>
          </h3>
          <p>
            We offers a big range of vehicles for all your driving needs. We
            have the perfect car to meet your needs.
          </p>
          <span class="span-flex sf-1">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 512 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"
              ></path>
            </svg>
            <p>+251963511786</p>
          </span>
          <span class="span-flex sf-2">
            <svg
              stroke="currentColor"
              fill="currentColor"
              stroke-width="0"
              viewBox="0 0 512 512"
              height="1em"
              width="1em"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"
              ></path>
            </svg>
            <p>awoliioop@gmail.com</p>
          </span>
          <small> Developed by AAU-CS-SEC01-GROUP-21 </small>
        </div>
        <div class="footer-box fb-2">
          <h3>Contact Us through</h3>
          <ul>
            <li>
              <a href="" target="_blank"> LinkedIn </a>
            </li>
            <li>
              <a href="" target="_blank"> Github </a>
            </li>
            <li>
              <a href="" target="_blank"> Twitter </a>
            </li>
            <li>
              <a href="" target="_blank"> Whatsapp </a>
            </li>
          </ul>
        </div>
        <div class="footer-box fb-3">
          <h3>WORKING HOURS</h3>
          <p>Mon - Fri: 9:00AM - 9:00PM</p>
          <p>Sat: 9:00AM - 19:00PM</p>
          <p>Sun: Still working</p>
        </div>
      </div>
    </div>

    <script src="autenthicate.js" async defer></script>
  </body>
</html>
