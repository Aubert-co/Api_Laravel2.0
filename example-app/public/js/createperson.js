//parte de criação
var objHideDiv = {divCreate:$('.create'),editionDiv:$('.edition'),showCreateItem:$('.createHide') }
objHideDiv.divCreate.hide()
objHideDiv.editionDiv.hide()

function createPersons(){
    const data = {name:$("#name").val(),age:$("#age").val(),pet:$("#pet").val()}
    const objToAjax = {url:`http://localhost:8000/createpersons`,method:'POST',data,load:'table'}
    callAJAX(objToAjax)

}

//Parte onde mostra a div de inserção de valores na tabela
function showCreate(){
    let {showCreateItem,divCreate} = objHideDiv
    showCreateItem.hide()
    divCreate.show()

}
//Parte onde esconde a div de inserção de valores na tabela
function cancelCreatePersons(){
    let {showCreateItem,divCreate} = objHideDiv
    showCreateItem.show()
    divCreate.hide()
}
