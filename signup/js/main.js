function register() {
    var name = document.getElementById('name'),
        gender = document.getElementById('gender'),
        address = document.getElementById('address'),
        phonenum = document.getElementById('phonenum'),
        email = document.getElementById('email').value,
        password = document.getElementById('pass').value;

    var datalogin = {
        email: email,
        password: password,
        role_id: 2
    };

    $.ajax({
        method: 'post',
        url: 'http://178.128.82.158:22/login',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(datalogin),
        success: function(response) {
            localStorage.setItem('token', response.access_token);
        }
    })
}
