window.onload = function(){
    carregadadosvaga();
    
}


function carregadadosvaga(){
    var elementscontainerdados = document.getElementsByClassName('containerdados');
    var numelements=nomevaga.length;
    for(var i=0; i<numelements; i++){
        var pelementnome = document.createElement('p');
        var pelementcidade = document.createElement('p');
        var pelementrequisitos = document.createElement('p');
        var pelement_nome_empresa = document.createElement('p');
        
        

        
        
        pelementnome.innerHTML += '<p class="txtinfovg">Nome da Vaga:</p>' +  '<p class="txtgetfromsql">' +  nomevaga[i] + '</p>' ;
        pelementcidade.innerHTML  += '<p class="txtinfovg">Cidade:</p>' + '<p class="txtgetfromsql">' +   cidadevaga[i] + '</p>';
        pelementrequisitos.innerHTML += '<p class="txtinfovg">Requisitos:</p>'  + '<p class="txtgetfromsql">' + requisitosvaga[i] + '</p><hr>';
        pelement_nome_empresa.innerHTML += '<p class="txtinfovg">Empresa:</p>' +  '<p class="txtgetfromsql">' +  nome_empresa[i] + '</p>';
    

        elementscontainerdados[i].appendChild(pelementnome);
        elementscontainerdados[i].appendChild(pelementcidade);
        elementscontainerdados[i].appendChild(pelement_nome_empresa);
        elementscontainerdados[i].appendChild(pelementrequisitos);
       
      

    }
    
    var elementteste = document.getElementsByClassName('teste');
    var pelementnumvaga= document.createElement('p');
    pelementnumvaga.innerHTML += num_vaga;
    elementteste[0].appendChild(pelementnumvaga);


    var elementempnum = document.getElementsByClassName('emp');
    var pelementusernum= document.createElement('p');
    pelementusernum.innerHTML += num_emp;
    elementempnum[0].appendChild(pelementusernum);


    var elementusernum = document.getElementsByClassName('user');
    var pelementusernum= document.createElement('p');
    pelementusernum.innerHTML += num_users;
    elementusernum[0].appendChild(pelementusernum);


}

