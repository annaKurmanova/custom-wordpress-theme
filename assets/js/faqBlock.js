const faqBlocks = Array.from(document.querySelectorAll('.faq__block'));

faqBlocks.map(faqBlock => {
  faqBlock.addEventListener('click', openQuestion);
});

function openQuestion() {
  this.classList.toggle('active');
}