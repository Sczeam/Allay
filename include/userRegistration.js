
function registerUser() {
    const name = document.getElementById("regName").value
    const email = document.getElementById("regEmail").value
    const password = document.getElementById("regPass").value
    const conPassword = document.getElementById("regConPass").value
    const data = {
        name: name,
        email: email,
        password: password,
    }
    if (password === conPassword && name && email) {
        $.ajax({
            type: "POST",
            url: "include/register_user.php",
            data: data,
            success: (response) => {
                console.log(response);
            },
            error: (response) => {
                console.log(response);
            }
        })
    } else {
        alert("Passwords don't match")
    }

}