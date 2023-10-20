function smoothScroll(target) {
    document.querySelector(target).scrollIntoView({
        behavior: 'smooth'
    });
}

document.getElementById('stylish-btn').addEventListener('click', function() {
    smoothScroll('#qr-code')
});