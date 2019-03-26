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
        url: 'http://192.168.43.52:8000/login',
        contentType: 'application/json',
        dataType: 'json',
        data: JSON.stringify(datalogin),
        success: function(response) {
            console.log(response);
        }
    })
    // fetch('http://192.168.43.52:8000/login', {
    //     method: 'post',
    //     mode: "no-cors",
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify(datalogin)
    // })
    // .then(res => {
    //     console.log(res);
    // })
    // .then(res => res.json())
    // .then(result => {
    //     var datauser = {
    //         login_id: result.id,
    //         address: address,
    //         gender: gender,
    //         name: name,
    //         phone: phonenum
    //     };

    //     fetch('http://192.168.43.52:8000/user', {
    //         method: 'post',
    //         headers: {
    //             'Content-Type': 'application/json',
    //         },
    //         body: JSON.stringify(datauser)
    //     }).then(res => {
    //         console.log(res);
    //         return res.json();
    //     })
    // })
}