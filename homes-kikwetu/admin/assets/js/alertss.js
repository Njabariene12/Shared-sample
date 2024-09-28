function alertdisplay(){
    const alertbox = document.getElementById("alata");
    alertbox.classList.add('show');
    setTimeout(() => {
        alertbox.classList.remove('show');
    }, 3000)

}