function registereduser(){
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

}