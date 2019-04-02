function register() {


    var name = document.getElementById('name').value,
        gender = document.getElementById('gender').value,
        address = document.getElementById('address').value,
        phone = document.getElementById('phone').value,
        email = document.getElementById('email').value,
        password = document.getElementById('pass').value,
        date_of_birth = document.getElementById('year').value + '-' 
                        + document.getElementById('month').value + '-' 
                        + document.getElementById('date').value;

    var datalogin = {
        email: email,
        password: password,
        phone: phone,
        address: address,
        gender: gender,
        name: name,
        date_of_birth: date_of_birth
    };




    $.ajax({
        method: 'post',
        url: 'http://178.128.82.158/api/login',
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

}

function signuprefresh() {
    location.href='/../index.php'
}