let div=document.querySelector("#list_post");
function list(titre,date,id){
    let div_post=document.createElement("div");
    div_post.classList.add("rounded-2", "bg-white", "my-5", "shadow","p-3");
    let dates=document.createElement("h6");
    dates.classList.add("text-secondary");
    dates.innerHTML=date;
    div_post.appendChild(dates);
    let titres=document.createElement("a");
    titres.classList.add("text-dark","fs-3");
    titres.innerText=titre;
    titres.href = "?action=project&id="+id;
    titres.addEventListener("mouseover", function() {
        titres.classList.replace("text-dark","text-info");
    });
    titres.addEventListener("mouseout", function() {
        titres.classList.replace("text-info","text-dark");
    });
    div_post.appendChild(titres);
    div.appendChild(div_post);
}