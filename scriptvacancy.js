let currentSlide = 1;
// const perPage = 6;
const perPage = 9; // Было 6, стало 9 → 3 ряда по 3 карточки

function showSlide(slideIndex) {
  const blocks = document.querySelectorAll('.section-2-head');

  blocks.forEach((block, index) => {
    const min = (slideIndex - 1) * perPage;
    const max = slideIndex * perPage;
    block.style.display = (index >= min && index < max) ? 'block' : 'none';
  });

  const dots = document.querySelectorAll('.dot');
  dots.forEach(dot => dot.classList.remove('active'));
  if (dots[slideIndex - 1]) {
    dots[slideIndex - 1].classList.add('active');
  }

  currentSlide = slideIndex;
}

document.addEventListener("DOMContentLoaded", () => showSlide(currentSlide));
