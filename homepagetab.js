const first = {title: "S&T Undergraduate Scholarships", description: "The S&T Undergraduate Scholarships Program aims to stimulate and entice talented Filipino youths to pursue lifetime productive careers in science and technology and ensure a steady, adequate supply of qualified S&T human resources which can steer the country towards national progress."};
const second = {title: "Merit", description: "The DOST-SEI Merit Scholarship Program, formerly known as the NSDB or NSTA Scholarship under RA No. 2067, is awarded to students with high aptitude in science and mathematics and are willing to pursue careers in the fields of science and technology."};
const third = {title: "RA 7687", description: "Republic Act No. 7687, also known as the “Science and Technology Scholarship Act of 1994”, provides for scholarships to talented and deserving students whose families’ socio-economic status does not exceed the set cut-off values of certain indicators. Qualifiers must pursue priority fields of study in the basic sciences, engineering, other applied sciences, and science and mathematics teaching."};


let tab1 = document.getElementById("tab1");
let tab2 = document.getElementById("tab2");
let tab3 = document.getElementById("tab3");
let title = document.getElementById("title");
let description = document.getElementById("desc");
let layer = document.getElementById("parent");

function showLayerOne(){
    tab1.style.zIndex = "10";
    tab2.style.zIndex = "-10";
    title.innerHTML = first.title;
    description.innerHTML = first.description;
    layer.style.backgroundColor = first.color;
}
function showLayerTwo(){
    tab1.style.zIndex = "-10";
    tab2.style.zIndex - "10";
    title.innerHTML = second.title;
    description.innerHTML = second.description;
    layer.style.backgroundColor = second.color;
}
function showLayerThree(){
    tab1.style.zIndex = "-10";
    tab2.style.zIndex - "-10";
    tab3.style.zIndex - "10";
    title.innerHTML = third.title;
    description.innerHTML = third.description;
    layer.style.backgroundColor = third.color;
}

tab1.addEventListener("click", showLayerOne);
tab2.addEventListener("click", showLayerTwo);
tab3.addEventListener("click", showLayerThree);
