
let div2=document.querySelector("#cat");
let inp=document.querySelector("#texsof");
let btnser=document.querySelector("#btnser");

btnser.addEventListener("click",inf);

/**
 * The function `inf` fetches data from the NASA Tech Transfer Software API based on user input,
 * displays the results with relevant information, and provides a button to open additional project
 * info if available.
 */
function inf() {
    div2.innerHTML="";
    let texts=inp.value;
    console.log(texts);
    let url=`https://api.nasa.gov/techtransfer/software/?${texts}&api_key=DEMO_KEY`;
    fetch(url)
    .then(response => response.json())
    .then(data =>{
        const result=data.results;
        
        
        let count=document.createElement("h2");
        let textcount="Find Result: "+ data.count;
        count.innerText=textcount;
        div2.appendChild(count);
        result.forEach(element => {
            let div=document.createElement("div");
            div.classList.add("rounded-2", "bg-white", "my-5", "shadow","p-3");
            let tit=document.createElement("h3");
            tit.innerHTML=element[2];;
            div.appendChild(tit);
            let des=document.createElement("p");
            des.classList.add("text-secondary");
            des.innerHTML=element[3];
            div.appendChild(des);
            let lic=document.createElement("p");
            lic.classList.add("text-dark");
            lic.innerText="License: "+element[6];
            if (element[8]!=="") {
                let rep=document.createElement("button");
                rep.innerText="Info Project";
                rep.addEventListener("click", function() {
                    window.open(element[8], "_blank");
                  });
                rep.classList.add("btn", "btn-info", "text-white", "float-end");
                div.appendChild(rep);
            }
            div.appendChild(lic);
            div2.appendChild(div);
        });

    } )
    .catch(error => console.log('error', error));
}