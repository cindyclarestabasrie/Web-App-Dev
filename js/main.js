window.onload = () => {
    console.log(localStorage.getItem('token'));
    HTMLFormControlsCollection
    if (localStorage.getItem('token')) {
        document.getElementById('login-btn').style.display = 'none'; //If already login disable the login
        document.getElementById('livechat').href = 'livechat.php'
    } else {
        document.getElementById('logout-btn').style.display = 'none';
        document.getElementById('livechat').href = 'Error/index.html';//if not yet login, show error when click live chat
    }
};

function logout() {
    localStorage.removeItem('token');
    location.href='index.php';
}