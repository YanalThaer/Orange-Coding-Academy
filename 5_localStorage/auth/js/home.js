document.addEventListener("DOMContentLoaded", function() {
    let loggedInUser = JSON.parse(localStorage.getItem('loggedInUser'));

    if (!loggedInUser) {
        window.location.href = "../index.html";
    } else {
        document.getElementById('userName').innerText = loggedInUser.fname + ' ' + loggedInUser.lname;
        document.getElementById('email').innerText = loggedInUser.email;
        document.getElementById('address').innerText = loggedInUser.address;
    }

    document.getElementById('logoutBtn').addEventListener("click", function() {
        localStorage.removeItem('loggedInUser');
        window.location.href = "../index.html";
    });
});
