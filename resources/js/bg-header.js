const all_img_header = document.querySelectorAll('.img_header')

let count_position = 0

setInterval(function () {
    all_img_header[count_position].classList.remove('z-20')
    all_img_header[count_position].classList.add('opacity-0')

    if (count_position >= 3) {
        count_position = 0
    } else {
        count_position++
    }

    all_img_header[count_position].classList.remove('opacity-0')
    all_img_header[count_position].classList.add('z-20')
}, 5000)


