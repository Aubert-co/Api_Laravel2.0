//parte de edição
var editionName = document.querySelector('#editionName')
var editionAge = document.querySelector('#editionAge')
var editionPet = document.querySelector('#editionPet')
var objEditUsers = {name:editionName,age:editionAge,pet:editionPet}

/*function callAJAX ({method,url,data,load='body'}){
    $.ajax({
        method,
        url,
        headers:{'X-CSRF-TOKEN':token},
        data,
        success:function(data){
            $(load).html( data )
        }
    })
}*/

var token = $('input[name=_token]').val()

var editValuesInputs = (id,name,age,pet)=>{
    editionName.value = name
    editionAge.value = age
    editionPet.value = pet
    objEditUsers.id = id
}
//cancelar a edição e esconder a div
function UpdateElementsCancel(){
    let {editionDiv} = objHideDiv
    editionDiv.hide()
    editValuesInputs("","","","")
    $('.flex').fadeTo(0.25,1)
}
//botão de edição onde abre a div para editar os valores
function Edit(id,name,age,pet){
    $('.flex').fadeTo(0.25,0.25)
    let {editionDiv} = objHideDiv
    editionDiv.show()
    editValuesInputs(id,name,age,pet)
}
function UpdateElementsConfirm(){
    const {id,name,age,pet} = objEditUsers
    const data = {name:name.value,age:age.value,pet:pet.value,id}
    const {editionDiv} = objHideDiv
    const objToAjax = {url:`http://localhost:8000/editone`,method:"PUT",data,load:'table'}
    callAJAX(objToAjax)
    editionDiv.hide()
    $('.flex').fadeTo(0.25,1)
}
/*Parte de buscas tanto por usuario , pet ou idade
 Observação eu teria usado o search com o evento com busca sem precisar clicar pra busca
 mas o jquery ainda é um pouco misterioso pra mim.
*/


// Parte de adicionar valoeres na tabela

