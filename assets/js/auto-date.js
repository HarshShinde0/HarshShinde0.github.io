document.addEventListener('DOMContentLoaded', function() {
    // Update the last updated date
    const today = new Date();
    const formattedDate = today.getFullYear() + '-' + 
        String(today.getMonth() + 1).padStart(2, '0') + '-' + 
        String(today.getDate()).padStart(2, '0');
    const footerDateElement = document.querySelector('.page__footer-copyright br');
    if (footerDateElement) {
        footerDateElement.nextSibling.textContent = 'Site last updated ' + formattedDate;
    }
}); 