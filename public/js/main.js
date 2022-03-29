let list_of_dieren = document.getElementsByTagName("li");

let checkbox_list = document.getElementsByClassName("filter-section__input");

for(let i=0; i<list_of_dieren.length; i++){
    // list_of_dieren[i].style.display = "none"
    console.log(list_of_dieren[i].dataset.kindOfDier);
}


for(let i=0; i<checkbox_list.length; i++){
    checkbox_list[i].checked = true;
    console.log(checkbox_list[i].name);
    checkbox_list[i].addEventListener("change", function(){
        if(checkbox_list[i].checked === true){
            for(let j=0; j<list_of_dieren.length; j++){
                if(list_of_dieren[j].dataset.kindOfDier == checkbox_list[i].name){
                    list_of_dieren[j].style.display = "";
                }
            }
        }
        
        if(checkbox_list[i].checked === false){
            for(let j=0; j<list_of_dieren.length; j++){
                if(list_of_dieren[j].dataset.kindOfDier === checkbox_list[i].name){
                    list_of_dieren[j].style.display = "none";
                }
            }
        }
    })
}


