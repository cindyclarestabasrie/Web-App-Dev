function register() {


    var name = document.getElementById('name').value,
        gender = document.getElementById('gender').value,
        address = document.getElementById('address').value,
        phonenum = document.getElementById('phonenum').value,
        email = document.getElementById('email').value,
        password = document.getElementById('pass').value;

    var datalogin = {
        email: email,
        password: password,
        phonenum: phonenum,
        address: address,
        gender: gender,
        name: name,
        role_id: 2
       
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