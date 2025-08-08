function validateForm(){
    let user = document.getElementById("username").value.trim();
    let pass = document.getElementById("password").value.trim();

    if(user === "" || pass === ""){
        alert("both fields are required.");
        return false;
    }

    return true;   
}