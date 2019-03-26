function register() {
    var name = document.getElementById('name'),
        gender = document.getElementById('gender'),
        address = document.getElementById('address'),
        phonenum = document.getElementById('phonenum'),
        email = document.getElementById('email'),
        password = document.getElementById('pass');

    var datalogin = {
        email: email,
        password: password,
        role_id: 2
    };

    fetch('http://192.168.60.52:8000/login', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datalogin)
    })
    .then(res => res.json())
    .then(result => {
        var datauser = {
            login_id: result.id,
            address: address,
            gender: gender,
            name: name,
            phone: phonenum
        };

        fetch('http://192.168.60.52:8000/user', {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                body: JSON.stringify(datauser)
            }
        }).then(res => {
            console.log(res);
            return res.json();
        })
    })
}