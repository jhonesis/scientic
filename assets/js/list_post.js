let div=document.querySelector("#list_post");
/**
 * The function "list" creates a styled HTML element with a title, date, and link based on the provided
 * parameters.
 * @param titre - The `titre` parameter in the `list` function represents the title of a post or
 * project. It is the title that will be displayed as a link in the created HTML element.
 * @param date - The `date` parameter in the `list` function represents the date of the post or
 * project. It is used to display the date information within the dynamically created HTML elements for
 * each post.
 * @param id - The `id` parameter in the `list` function is used to identify a specific project or
 * item. It is passed as a parameter when calling the function and is used to generate a unique link
 * for each project displayed in the list.
 */
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