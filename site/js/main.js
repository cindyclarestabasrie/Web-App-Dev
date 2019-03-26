window.onload = () => {
    if (localStorage.getItem('token')) {
        document.getElementById('login-btn').style.display = 'none';
    }
};