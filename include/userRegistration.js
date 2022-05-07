function registerUser() {
  const name = document.getElementById("regName").value;
  const email = document.getElementById("regEmail").value;
  const password = document.getElementById("regPass").value;
  const conPassword = document.getElementById("regConPass").value;

  const data = {
    name: name,
    email: email,
    password: password,
  };

  if (password === conPassword && name && email) {
    $.ajax({
      type: "POST",
      url: "include/register_user.php",
      data: data,
      success: (response) => {
        console.log(response);
        window.open(`template/validateAuthCode.php?email=${email}`);
      },
      error: (response) => {
        console.log(response);
      },
    });
  } else {
    alert("Passwords don't match");
  }
}

function validate() {
  const authCode = document.getElementById("authCode").value;
  const email = document.getElementById("email").value;
  if (authCode > 100000 && email) {
    const data = {
      authCode: authCode,
      email: email,
    };

    $.ajax({
      type: "POST",
      url: "../include/activateAcc.php",
      data: data,
      success: (response) => {
        if (response == 1) {
          alert("Activated");
        } else if (response == 0) {
          alert("Wrong Code");
        } else if (response == -1) {
          alert("Code Expired");
        }
      },
      error: (response) => {
        console.log(response);
      },
    });
  } else {
    alert("Invalid Code");
  }
}

function renewCode() {
  const email = document.getElementById("email").value;
  const data = {
    email: email,
  };
  $.ajax({
    type: "POST",
    url: "../include/renewAuthCode.php",
    data: data,
    success: (response) => {
      if (response) {
        alert("Code Renewed");
      } else {
        alert("Can't renew");
      }
    },
    error: (response) => {
      console.log(response);
    },
  });
}
