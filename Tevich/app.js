const showMoreBtn = document.getElementById("show-more-btn");
let showMoreContainer = document.getElementById("show-more-container"); 
let streamsSecRow = document.getElementById("streams-sec-row"); 

showMoreBtn.addEventListener("click", ()=>{
    showMoreContainer.style.display = "none";
    streamsSecRow.style.display = "flex";
})