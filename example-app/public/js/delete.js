//parte de delete uncio
function Delete(id){
    const objToAjax = {url:`http://localhost:8000/deleteone/${id}`,method:"DELETE",load:'table'}
    callAJAX(objToAjax)
}
