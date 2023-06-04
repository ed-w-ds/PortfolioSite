function invalidLogin() {
    const invalidLogin = document.createElement("p");
    const text = document.createTextNode("Invalid email and/or password");
    invalidLogin.appendChild(text);
    invalidLogin.style.color = "white"; 
    invalidLogin.style.textAlign = "center";
    const element = document.getElementById("div1");
    element.appendChild(invalidLogin);
}
