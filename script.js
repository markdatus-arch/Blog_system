
let title_textbox = document.getElementById("text_box_title");
let content_textbox = document.getElementById("text_box_Content");
let post_button = document.getElementById("postbtn");
let display_page = document.getElementById("post_page");



post_button.addEventListener("click", function(){
    let title_textboxValue = title_textbox.value
    let content_textboxValue = content_textbox.value

    if(title_textboxValue === "" || content_textboxValue === ""){
        console.log("make sure to put some text");
        alert("Maglagay ka ng value")
    }else{
        createPostElement(title_textboxValue, content_textboxValue);
    }

    title_textbox.value = "";
    text_box_Content.value = "";
});


function createPostElement(title, content){

    const mainContainer = document.createElement("div");
    mainContainer.classList.add('mainContainer');

    const title_section = document.createElement("div");
    title_section.classList.add('title_section');

    const contentSection = document.createElement("div");
    contentSection.classList.add('contentSection');

    const commentSection = document.createElement("div");
    commentSection.classList.add('commentSection');

    const titleValue = document.createElement("h2");
    titleValue.innerHTML =  title

    const contentValue = document.createElement("p");
    contentValue.textContent = content;

    title_section.append(titleValue);
    contentSection.append(contentValue);

    mainContainer.append(title_section);
    mainContainer.append(contentSection);

    display_page.append(mainContainer);
}