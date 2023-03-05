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


