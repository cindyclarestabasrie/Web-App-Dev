window.onload = () => {
    if (localStorage.getItem('token')) {
        document.getElementById('login-btn').style.display = 'none';
    }

    if (!localStorage.getItem('token')) {
        document.getElementById('logout-btn').style.display = 'none';
    }
};

function logout() {
    localStorage.removeItem('token');
    location.reload();
}