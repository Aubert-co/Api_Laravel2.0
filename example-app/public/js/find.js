//parte de buscas
 $("#inputSearch").on('input',()=>{
    const text = $('#inputSearch').val()

    if(text === ''){
        const objToAjax = {url:`http://localhost:8000/find`,method:"GET",load:'table'}
        callAJAX(objToAjax)
        return
    }
    const objToAjax = {url:`http://localhost:8000/find/${text}`,method:"POST",load:'table'}
    callAJAX(objToAjax)

})


