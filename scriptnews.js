document.addEventListener('DOMContentLoaded', function() {
    const readMoreLinks = document.querySelectorAll('.read-more');

    readMoreLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const newsItem = this.closest('.news__item');
            const fullContent = newsItem.querySelector('.full-content');

            fullContent.classList.toggle('show');

            if (fullContent.classList.contains('show')) {
                this.textContent = 'Read less';
            } else {
                this.textContent = 'Read more';
            }
        });
    });
});

