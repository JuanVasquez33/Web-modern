const imagenes = document.querySelectorAll('.img-galeria');
const imagenesLight = document.querySelector('.agregar-imagen');
const contenedorLigth = document.querySelector('.imagen-light');

console.log(imagenes);

imagenes.forEach(imagen => {
    imagen.addEventListener('click', ()=> {
        aparecerImagen(imagen.getAttribute('src'));
    });
});

contenedorLigth.addEventListener('click', (e)=>{
    if(e.target != imagenesLight){
        hamburguesa.hidden = false;
        contenedorLigth.classList.toggle('show');
        imagenesLight.classList.toggle('showImage');    
    }
})

const aparecerImagen = (imagen) => {
    hamburguesa.hidden = true;
    imagenesLight.src = imagen;
    contenedorLigth.classList.toggle('show');
    imagenesLight.classList.toggle('showImage');
}