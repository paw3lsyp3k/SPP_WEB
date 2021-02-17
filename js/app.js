
//Aroow to go up function
var tl = new TimelineMax({ onUpdate: updatePercentage });
const controller = new ScrollMagic.Controller();

tl.from("#arrowup", 1, { right: "-9vmax" });

const scene = new ScrollMagic.Scene({
  triggerElement: "#w1button",
  triggerHook: "onLeave",
  duration: "10%",
})
  .setTween(tl)
  .addTo(controller);

function updatePercentage() {
  tl.progress();
  console.log(tl.progress());
}

//Showing description on wrapper6

function desc(number){
  let x=0;
  for (let i = 1; i < 7; i++) {
    x++;
    document.getElementById("w6sectionactive"+ x).style.display = "none";
    document.getElementById("w6icon"+ x).style.display = "block";
    document.getElementById("w6icon"+ x + x).style.display = "none";
  }
  if(number!=null){
    document.getElementById("w6sectionactive"+number).style.display = "block";
    document.getElementById("w6icon"+number).style.display = "none";
    document.getElementById("w6icon"+number+number).style.display = "block";
  }
}
