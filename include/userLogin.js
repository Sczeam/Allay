function login() {
  const loginEmail = document.getElementById("loginEmail").value;
  const loginPassword = document.getElementById("loginPassword").value;
  const loginMessage = document.getElementById("loginMessage");

  if (loginEmail && loginPassword) {
    const data = {
      email: loginEmail,
      password: loginPassword,
    };

    $.ajax({
      type: "POST",
      url: "include/login.php",
      data: data,
      dataType: "json",
      success: (response) => {
        if (response[0] == 1) {
          alert("Logged in as :" + response[1]);
        } else if (response[0] == 0) {
          loginMessage.textContent = "Wrong Credentials";
        }
      },
      error: (response) => {
        console.log(response);
      },
    });
  }
}
