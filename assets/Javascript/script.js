const openButton = document.querySelectorAll('.btn-cadastro');

openButton.forEach(button => {
    button.addEventListener('click', () =>{
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalId);
        
        modal.showModal();
    });
});

const closeButton = document.querySelectorAll('.close-modal');

closeButton.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalId);

        modal.close();
    });
});