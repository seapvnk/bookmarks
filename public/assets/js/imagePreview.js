(() => {
    // image preview events
    const preview =  document.getElementById('avatar-preview')

    const loadFile = event => {
        preview.src = URL.createObjectURL(event.target.files[0]);
        preview.onload = () => {
            URL.revokeObjectURL(preview.src) // free memory
        }
    }

    const imageInput = document.getElementById('avatar')
    imageInput.onchange = event => loadFile(event)

})()