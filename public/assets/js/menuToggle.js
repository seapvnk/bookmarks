(() => {

    const button = document.querySelector('.toggle-menu');
    const body = document.querySelector('body')
    button.addEventListener('click', () => {
        body.classList.toggle('on-menu')
    })
    
})()