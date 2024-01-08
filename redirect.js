document.getElementById("bookRide").addEventListener("click", function () {
  window.location.href = "booking.php";
});
document.getElementById("learnmore").addEventListener("click", function () {
  window.location.href = "find.php";
});

// Get all buttons with the specified class
const buttons = document.querySelectorAll(".book");

// Define the target URL where the buttons will redirect
const targetUrl = "booking.php";

// Attach click event listeners to each button
buttons.forEach((button) => {
  button.addEventListener("click", () => {
    // Redirect to the target URL
    window.location.href = targetUrl;
  });
});
