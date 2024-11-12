document.querySelectorAll('.download-btn').forEach(button => {
    button.addEventListener('click', (event) => {
        alert(`You are downloading the course PDF: ${event.target.innerText}`);
    });
});
