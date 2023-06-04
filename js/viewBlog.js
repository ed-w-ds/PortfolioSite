document.addEventListener("DOMContentLoaded", () => {
    const editButton = document.getElementById("editButton");
    const title = document.getElementById("blog-title").textContent;
    const blogPost = document.getElementById("blog-text").textContent;
    editButton.addEventListener('click', function() { 
        // Redirect the user to the addpost.php page with default values
        window.location.href = `addpost.php?titlejs=${title}&blogPostjs=${blogPost}`;
    });
});