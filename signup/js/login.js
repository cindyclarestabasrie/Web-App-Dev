function login() {
    var email = document.getElementById('email').value,
        password = document.getElementById('your_pass').value;

    var datalogin = {
        email: email,
        password: password,
    };

    $.ajax({
        method: 'post',
        url: 'http://178.128.82.158:22/api/auth/login',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(datalogin),
        success: function(response) {
            localStorage.setItem('token', response.access_token);
            console.log(response);
            location.href="/";
        }
    })
}