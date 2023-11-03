

/*
var elements = document.getElementsByTagName('a');

function opacity(){}

    for(var i = 0, len = elements.length; i < len; i++) {
        elements[i].onclick = function () {
            // stuff
            elements[i].className = "active";
        }
    }

    function callback(e) {
        var e = window.e || e;
    
        if (e.target.tagName !== 'A')
            return;
    
        // Do something
    }
    
    if (document.addEventListener)
        document.addEventListener('click', callback, false);
    else
        document.attachEvent('onclick', callback);

function addclass(){
e =document.getElementById('');
e.className="active";
}


const item = document.querySelectorAll(".nav-bar-i");

item.forEach(link => {
  link.addEventListener("click", function () {
    link.className="active";
  });
});


const boxes = document.querySelectorAll('a');
for(const box of boxes){
box.addEventListener('click',function handleClick() {
   // box.classList.add("active");
    //box.classList.toggle("a");
    
    if(box.className == "active"){
        box.className = "";
    }else{
    box.className = "active";}
});

}


  document.addEventListener('click', function handleClick(event) { //TODO get the clicked element

  event.target.classList.add('active');
  event.target.classList.toggle("nav-bar-i");

});
*/


const item = document.querySelectorAll(".nav-bar-i a");

let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('.nav-bar-i a');

//////////////form media queria
let x = document.querySelector('.myname');
let nav = document.querySelector('.nav-bar-i');
/*
//x.onclick = nav.classList.toggle('.nav-bar-i.openmenue'); 
x.onclick=opacity;
function opacity(){
    //nav.classList.add('openmenue');
   if( nav.classList.contains('openmenue')){
    nav.classList.toggle('openmenue');

   }else{
    nav.classList.add('openmenue');
   // nav.classList.toggle('openmenue');

   }

}
*/
x.onclick = () => {

    nav.classList.toggle('openmenue');

}


window.onscroll = () => {
    //window.prompt("now hi again ");
    let header = document.querySelector('.nav-bar');
    header.classList.toggle('sticky' , window.scrollY > 100 );
   // document.getElementById('contact').className="active"
  console.log(window.scrollY)
  
//hide 
sections.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 100  ;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');

console.log(top,offset,height,id);
//"if sy grater than section top and sy less than section top + section height than"
if(top >= offset && top < offset + height ){
    navlinks.forEach(links =>{
        links.classList.remove('active');
        document.querySelector('.nav-bar-i a[href*=' + id +']').classList.add('active');
    });
}
nav.classList.remove('openmenue');
});



}
/*
item.forEach(link => {
   
  link.addEventListener("click", function () {
   // for (let i = 0, len = item.length;i < len ; i++) {
    //    item[i].className="";
        
   // }
   // link.className="active";
  });
});
*/
g = document.getElementById('a');
still = document.getElementById('still');

still.addEventListener("click", () =>{
    
g.innerHTML = "this is new ";

    
});

