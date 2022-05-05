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
      url: "../include/validation.php",
      data: data,
      success: (response) => {
        console.log(response);
      },
      error: (response) => {
        console.log(response);
      },
    });
  } else {
    alert("Wrong auth code");
  }
}
