let selectedTool = "unjustified";

function absenceCardsLoadEvenlistner() {
    var cards = document.getElementsByClassName("studentCard");
    Array.from(cards).forEach((card) => {
        card.addEventListener("click", function (card) {
            this.classList.remove(this.classList[1])
            this.classList.add(selectedTool);
        });
    });
}

function absenceToolsLoadEventListner(){
    var tools = document.getElementsByClassName("toolBtn");
    Array.from(tools).forEach((tool) =>{
        tool.addEventListener("click",function (tool){
            if(this.classList[2] != "erase"){
                selectedTool = this.classList[2];
            }else{
                selectedTool = "present";
            }
            document.getElementById("nav-content").blur();
        });
    })
}