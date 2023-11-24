document.addEventListener('DOMContentLoaded', function() {
   const accordionBlocks = document.querySelectorAll('.gutenberg-accordion');

   accordionBlocks.forEach(accordionBlock => {
       const items = accordionBlock.querySelectorAll('.accordion-item');

       items.forEach(item => {
           const header = item.querySelector('.accordion-header');
           const content = item.querySelector('.accordion-content');

           header.addEventListener('click', function() {
               content.classList.toggle('active');
           });
       });
   });
});