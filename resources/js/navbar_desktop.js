const navbar_desktop = document.getElementById('navbar_desktop')

window.onscroll = function () {
    let top = window.scrollY

    if (top >= 400){
        navbar_desktop.classList.add('bg-white')
        navbar_desktop.classList.add('shadow-xl')
        navbar_desktop.classList.remove('text-white')
        navbar_desktop.classList.add('text-black')
    } else {
        navbar_desktop.classList.remove('bg-white')
        navbar_desktop.classList.remove('shadow-xl')
        navbar_desktop.classList.remove('text-black')
        navbar_desktop.classList.add('text-white')
    }
}

