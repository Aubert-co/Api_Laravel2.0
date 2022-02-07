

function onlyOneCheck(id,checked){
    let {checkbox_lenght,selecionado,checkAllDiv,check_allCheckbox} = objCheckBoxes
    if(checked){
        values.set(`CheckBoxValue=${id}`,id)
        checkAllDiv.html(`desmarcar todos total:${values.size}`)
        check_allCheckbox.checked = true
    }else{
        values.delete(`CheckBoxValue=${id}`)
        checkAllDiv.html(`desmarcar todos total:${values.size}`)
    }
    if(values.sizes > 1)selecionado = true

    if(values.size === 0 ){
        checkAllDiv.html(`marcar todos total:${values.size}`)
        check_allCheckbox.checked = false
    }
    if(values.size  === checkbox_lenght ){
        check_allCheckbox.checked = true
        checkAllDiv.html(`desmarcar todos total:${values.size}`)
    }
}
/**
 *Parte de logica de checkbox onde clicando marca todas as checkboxes
 */
function check_all(checked){
    let {checkbox_lenght,selecionado,checkAllDiv} = objCheckBoxes
    if(checked){
        checkInputs.forEach((val)=>{
            val.checked = true
            const ids = val.value
            values.set(`CheckBoxValue=${ids}`,ids)
        })
        checkAllDiv.html(`desmarcar todos total:${values.size}`)
        return selecionado = true
    }
        checkInputs.forEach((val)=>{
            val.checked = false
        })
        values.clear()
        selecionado = false
        checkAllDiv.html(`marcar todos total:${values.size}`)
}
