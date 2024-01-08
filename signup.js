// Get form input values
const firstName = document.getElementById("First_Name").value;
const lastName = document.getElementById("Last_Name").value;
const username = document.getElementById("Username").value;
const birthDate = document.getElementById("Birth_Date").value;
const email = document.getElementById("Email").value;
const password = document.getElementById("Password").value;

// Create an object to store the data
const formData = {
  First_Name: firstName,
  Last_Name: lastName,
  Username: username,
  Birth_Date: birthDate,
  Email: email,
  Password: password,
};

// Send the data to PHP using AJAX
const xhr = new XMLHttpRequest();
xhr.open("POST", "saveData.php", true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function () {
  if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
    // Response received from PHP
    console.log(xhr.responseText);
  }
};
xhr.send(JSON.stringify(formData));
