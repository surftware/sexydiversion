<script src="js/contenedorMultiple/banner.js"></script>
<script>
    contenedorIndex();
    function contenedorIndex(){
        
        var arrayBanner = arrayContenedorBanner();    
        cicloContenedor(arrayBanner,'banner');
        
    }
    function cicloContenedor(array,div){
        var contenedorHtml =""; 
        for (let index = 0; index < array.length; index++)
        {
            contenedorHtml += ContenedorBanner(array[index]);
        }
        console.log(contenedorHtml);
        document.getElementById(div).innerHTML = contenedorHtml;
        
    }

</script>