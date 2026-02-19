document.getElementById("myForm").addEventListener("submit", function(e){
    e.preventDefault();

    let formData = new FormData(this);

    fetch("process.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("result").innerHTML = data;
        loadPosts();
        document.getElementById("myForm").reset();
    });
});


function loadPosts(){
    fetch("fetch_posts.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("postsContainer").innerHTML = data;
    });
}

loadPosts();