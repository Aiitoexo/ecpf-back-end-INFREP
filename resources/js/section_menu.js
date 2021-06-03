const all_menu_section = document.querySelectorAll('.menu_section');
const all_menu = document.querySelectorAll('.menu');

for (let i = 0; i < all_menu_section.length; i++) {
    all_menu_section[i].addEventListener('click', function () {
        for (let j = 0; j < all_menu_section.length; j++) {
            all_menu_section[j].classList.remove('border-b-2')
            all_menu_section[j].classList.remove('text-white')
            all_menu_section[j].classList.add('border-b-0')
            all_menu_section[j].classList.add('text-yellow-400')

            all_menu[j].classList.remove('hidden')
            all_menu[j].classList.add('hidden')
        }


        all_menu_section[i].classList.remove('border-b-0')
        all_menu_section[i].classList.remove('text-yellow-400')
        all_menu_section[i].classList.add('border-b-2')
        all_menu_section[i].classList.add('text-white')

        all_menu[i].classList.remove('hidden')
        all_menu[i].classList.add('flex')
    })
}

