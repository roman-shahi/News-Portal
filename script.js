// News Portal JavaScript

// Welcome message
console.log("Welcome to News Portal");

// Confirm before logout
function confirmLogout() {
    return confirm("Are you sure you want to logout?");
}

// Validate login form
function validateLogin() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (email == "" || password == "") {
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}

// Validate registration form
function validateRegister() {
    let fullname = document.getElementById("fullname").value;
    let email = document.getElementById("regemail").value;
    let password = document.getElementById("regpassword").value;

    if (fullname == "" || email == "" || password == "") {
        alert("Please fill in all fields.");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }

    return true;
}

// Validate search
function validateSearch() {
    let search = document.getElementById("search").value;

    if (search.trim() == "") {
        alert("Enter a news title to search.");
        return false;
    }

    return true;
}