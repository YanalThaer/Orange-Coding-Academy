function login(){
    event.preventDefault();

    const email      = document.getElementById('email').value;
    const password   = document.getElementById('password').value;

    let ecommerceData = JSON.parse(localStorage.getItem('ecommerce')) || { users : [] };
    let users = ecommerceData.users || [];

    let foundUser = users.find(user => user.email === email && user.password === password);

    if (foundUser) {
        localStorage.setItem('loggedInUser', JSON.stringify(foundUser));
        window.location.href = "pages/home.html";
    } else {
        alert("Invalid Email or Password");
    }
}