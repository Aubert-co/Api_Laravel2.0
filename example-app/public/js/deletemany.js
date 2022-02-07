//parte de multiplas deleteções
function Delete_All(){
    const datas = values.values()
    const ids = [...datas]

    if(ids.length ===0){
        SetTimeuout('Selecione pelo menos 1 item')
        return
    }
    $.ajax({
        method:"DELETE",
        url:`http://localhost:8000/deletemany`,
        headers:{'X-CSRF-TOKEN':token},
        data:{ids},
        success:function(data){
        $('body').html( data )
        }
    })

  /*
  não funcionou
  const objToAjax = {method:"DELETE",url:"http://localhost:8000/deletemany",data:ids}
    callAJAX(objToAjax)*/
}
