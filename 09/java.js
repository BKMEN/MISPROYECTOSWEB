$('#ir').click(function() {
       //Aquí creo el div de animación y lo inserto en el body
       let div = document.createElement('div')
       document.body.appendChild(div);
       div.id = 'animacion'
       var url = '';
       document.getElementById("iframe").innerHTML = "<iframe src=" + url + " onload="ocultarLoader();">Tu navegador no soporta iframes.</iframe>";
})
