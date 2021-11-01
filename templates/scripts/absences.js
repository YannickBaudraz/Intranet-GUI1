let selectedTool = "unjustified";

function absenceCardsLoadEvenlistner() {
    var cards = document.getElementsByClassName("studentCard");
    Array.from(cards).forEach((card) => {
        card.addEventListener("click", function (card) {
            this.classList.remove(this.classList[1])
            if(selectedTool != "erase"){
                this.classList.add(selectedTool);
            }else{
                this.classList.add("present");
            }

        });
    });
}

function absenceTableLoadEvenlistners() {
    var activeTimes = document.getElementsByClassName("activeTime");
    Array.from(activeTimes).forEach((activeTime) => {
        activeTime.addEventListener("click", function (activeTime) {
            this.classList.remove(this.classList[1])
            if(selectedTool != "erase"){
                this.classList.add(selectedTool);
            }else{
                this.classList.add("uncompleted");
            }
        });
    });
}


function absenceToolsLoadEventListner(){
    var tools = document.getElementsByClassName("toolBtn");
    Array.from(tools).forEach((tool) =>{
        tool.addEventListener("click",function (tool){

                selectedTool = this.classList[2];

            document.getElementById("nav-content").blur();
        });
    })
}