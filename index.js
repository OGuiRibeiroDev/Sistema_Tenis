const modelo = document.getElementById("modelo");


fetch('http://localhost/system/busca_modelo.php')
.then(data => {
return data.json();
})
.then(post => {
    const modelos = post;
    for(language in modelos) {
        option = new Option(modelos[language], language);
        modelo.options[modelo.options.length] = option;
        
      }
console.log(post);
});