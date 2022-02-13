const optionBtns = document.querySelectorAll('.options img');
optionBtns.forEach(item => {
    item.addEventListener('click', openCloseOptions);
});

function openCloseOptions(e) {
    if (!e.target.parentElement.classList.contains('active')) {
        document.querySelectorAll('.options').forEach(item => {
            item.classList.remove('active');
        });
        e.target.parentElement.classList.add('active');
        document.body.addEventListener('click', closeAll);
    } else {
        e.target.parentElement.classList.remove('active');
    }
}

function closeAll(e) {
    if (!e.target.closest('.options')) {
        document.querySelectorAll('.options').forEach(item => {
            item.classList.remove('active');
        });
        document.body.removeEventListener('click', closeAll);
    }
}