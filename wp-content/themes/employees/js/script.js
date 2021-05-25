
document.addEventListener('DOMContentLoaded', function(){
    let icon = document.querySelector('.icon');
    let hamburger = icon.querySelector('.hamburger');
    let cancel = icon.querySelector('.cancel');
    let menu = document.querySelector('.links');
    icon.addEventListener('click', () => {
        if(hamburger.style.display === "none"){
            hamburger.style.display = "flex";
            cancel.style.display = "none";
            menu.style.display = "none";
        }
        else{
            hamburger.style.display = "none";
            cancel.style.display = "flex";
            menu.style.display = "flex";
        }
    });

    let links = document.querySelector('.links');
    let home = links.querySelectorAll('li')[0];
    let products = links.querySelectorAll('li')[1];
    if(window.location.href === 'http://localhost/wordpress/home/'){
        home.classList.add('current-cat')
    }
    else{
        home.classList.remove('current-cat')
    }
    if(window.location.href === 'http://localhost/wordpress/products/'){
        products.classList.add('current-cat')
    }
    else{
        products.classList.remove('current-cat')
    }
})