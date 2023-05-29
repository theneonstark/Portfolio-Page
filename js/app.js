let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};


let section = document.querySelectorAll('section');
let nav = document.querySelectorAll('header nav a');

window.onscroll = () =>{
    section.forEach((sec) => {
        let top = window.scrollY;
        let offset = sec.offsetTop-150;
        let height = sec.offsetHeight;
        // console.log(top);
        let id = sec.getAttribute('id');

        if(top>= offset && top < offset+height){
            nav.forEach(links =>{
                links.classList.remove('active');
                document.querySelector("header nav a[href*="+id+"]").classList.add('active');
            });
        };
    });
    let header = document.querySelector('header')
    header.classList.toggle('sticky', window.scrollY > 100);

    menu.classList.remove('bx-x');
    navbar.classList.remove('active');

};

onlyNumber = (Stark) => {
    let AssCode = (Stark.which) ? Stark.which : Stark.keyCode;
    if (AssCode > 31 && (AssCode < 48 || AssCode > 57))
        return false;
    return true;
}


let lgnight = document.querySelector('#lg-night');
let night = document.querySelector('#night');
let Dark = document.querySelectorAll('link');
console.log(Dark[2]);
let a=0;
lgnight.onclick = () =>{
    lgnight.classList.toggle('bx-flip-horizontal');    
    Dark[2].href = (a==0 ? `dark.css` : `style.css`);
    a++;
    if(a>1){
        a=0;
    }
}

night.onclick = () =>{
    night.classList.toggle('bx-flip-horizontal');
    Dark[2].href = (a==0 ? `css/dark.css` : `css/style.css`);
    a++;
    if(a>1){
        a=0;
    }
}


var Change = document.getElementById('changeText');

var typewriter = new Typewriter(Change, {
    loop: true,
    delay: 75,
})

typewriter
  .pauseFor(1500)
  .typeString('Graphic Designer')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Web Designer')
  .pauseFor(1000)
  .deleteChars(8)
  .typeString('Developer')
  .pauseFor(1000)
  .deleteAll()
  .typeString('SME-Maths')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Content Writer')
  .pauseFor(1000)
  .deleteAll()
  .typeString('Teacher')
  .pauseFor(1000)
  .start();



$(document).ready(function(){
    $("#submit").click(function(){
        var uname=$("fname").val();
        var uemail=$("email").val();
        var utel=$("tel").val();
        var usub=$("sub").val();
        var umsg=$("msg").val();
        $.post("send.php",{fname:uname,email:uemail,num:utel,sub:usub,msg:umsg});
    })
})