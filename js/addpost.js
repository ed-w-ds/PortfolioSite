// Clear function
function resetText() {
    var resetTitle = document.getElementById("title");
    var resetText = document.getElementById("blog-post");
    resetTitle.value = "";
    resetText.value = "";
    title.style.backgroundColor = "white";
    blogText.style.backgroundColor = "white";
}

const form = document.getElementById('form');
const title = document.getElementsByName("title")[0];
const blogText = document.getElementsByName("blog-post")[0];
const loginText = document.getElementById("loginText");

form.addEventListener('submit', function(event) {
    event.preventDefault();
    if (title.value === "") {
        var text = document.createTextNode("Enter a title to add a post");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white";  
        title.style.backgroundColor = "purple";
    }
    else {
        title.style.backgroundColor = "white";
    }
    
    if (blogText.value === "") {
        let text = document.createTextNode("Enter text to add a post");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white";  
        blogText.style.backgroundColor = "purple";
    }
    else {
        blogText.style.backgroundColor = "white";
    }
    
    if (title.value === "" && blogText.value === "") {
        const text = document.createTextNode("Enter title and text to add a post");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white";  
        const div = document.getElementById("loginTextDiv");
        div.appendChild(loginText);
    }        
    
    if (title.value != "" && blogText.value != ""){
        form.submit();
    }
    
});

const previewButton = document.getElementById("previewButton");
previewButton.addEventListener("click", function(event) {
    event.preventDefault();
    if (title.value === "") {
        var text = document.createTextNode("Enter a title to view preview");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white"; 
        title.style.backgroundColor = "purple";
    }
    else {
        title.style.backgroundColor = "white";
    }
    
    if (blogText.value === "") {
        let text = document.createTextNode("Enter text to view preview");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white";  
        blogText.style.backgroundColor = "purple";
    }
    else {
        blogText.style.backgroundColor = "white";
    }
    
    if (title.value === "" && blogText.value === "") {
        const text = document.createTextNode("Enter title and text to view preview");
        if (loginText.firstChild) {
            loginText.replaceChild(text, loginText.firstChild);
        } else {
            loginText.appendChild(text);
        }
        loginText.style.textAlign = "center";
        loginText.style.color = "white";  
        const div = document.getElementById("loginTextDiv");
        div.appendChild(loginText); 
    }        
    
    if (title.value !== "" && blogText.value !== ""){
        const title = document.getElementById("title").value;
        const blogPost = document.getElementById("blog-post").value;
        const d = new Date();
        let day = d.getDate();
        let month = d.getMonth() + 1;
        let year = d.getFullYear();
        let date = `${day}/${month}/${year}`;
        let hour = d.getHours().toString().padStart(2, '0');
        let minutes = d.getMinutes().toString().padStart(2, '0');
        let time = `${hour}:${minutes}`;

        // Redirect the user to the preview page with the form values as URL parameters
        window.location.href = `viewBlog.php?titlejs=${title}&blogPostjs=${blogPost}&datejs=${date}&timejs=${time}`;
    }
});

// add event listener to the clear button, prevetn default prevents from clear button changing style
const clearButton = document.getElementById("reset");
clearButton.addEventListener("click", function(event) {
    event.preventDefault();
    resetText();
});
