let ul = document.querySelector('ul');
let li = document.querySelectorAll('a');

li.forEach(el => {
    el.addEventListener('click', function() {
        ul.querySelector('.active').classList.remove('active');

        el.classList.add('active');
    })
})