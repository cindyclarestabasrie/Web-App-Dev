function register() {


    var name = document.getElementById('name').value,
        gender = document.getElementById('gender').value,
        address = document.getElementById('address').value,
        phone = document.getElementById('phone').value,
        date_of_birth = document.getElementById('date_of_birth').value,
        email = document.getElementById('email').value,
        password = document.getElementById('pass').value;

    var datalogin = {
        email: email,
        password: password,
        role_id: 2
    };

    var datausers = {
        name: name,
        phone: phone,
        address: address,
        gender: gender,
        date_of_birth: date_of_birth

    };


    console.log(JSON.stringify(datalogin));

    $.ajax({
        method: 'post',
        url: 'http://178.128.82.158/api/login',
        // url: 'http://localhost:2000/api/login',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(datalogin),
        success: function(response) {
            localStorage.setItem('token', response.access_token);
        },
        error: function(response) {
            console.log(response);
        }
    })

    $.ajax({
        method: 'post',
        url: 'http://178.128.82.158/api/user',
        // url: 'http://localhost:2000/api/user',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(datausers),
        success: function(response) {
            localStorage.setItem('token', response.access_token);
        },
        error: function(response) {
            console.log(response);
        }
    })

}

function signuprefresh() {
    location.href='/../index.php'
}
