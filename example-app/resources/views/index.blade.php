<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>

    <main>
        @csrf

        <div class="flex">
            <div class="logs"></div>
            <div class="search_persons">
                <input type="text" id="inputSearch" placeholder="faça uma busca" >
                <i  id="search_icons" class="material-icons">search</i>
            </div>

            <div class="createHide">
                <i id="showCreateItem" class="material-icons" onclick="showCreate()">add</i>
            </div>
            <div class="create">
                <input type="text"id="name"placeholder="name">
                <input type="text" id="age" placeholder="age">
                <input type="text" id="pet" placeholder="pet">
                <button class="button-10" role="button" id="confirmCreate" onclick="createPersons()">confirmar</button>
                    <button class="button-10 cancel" id="cancelCreate" onclick="cancelCreatePersons()"> cancelar</button>
            </div>
        <div class="table">
            <table>
        <thead>
            <tr>
                <th>Select</th>
                <th>Name</th>
                <th>Age</th>
                <th>Pet</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach($values as $value)
            <tr >
                <td><input type="checkbox" onclick="onlyOneCheck( '{{$value->id}}',this.checked )" id="check" value="{{$value->id}}"></td>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->pet}}</td>
                <td>
                    <i class="material-icons" id="delete_icons" onclick="Delete('{{$value->id}}')" value='{{ $value->id }}'>delete</i>
                    <i class="material-icons" id="edit_icons" onclick="Edit('{{$value->id}}','{{$value->name}}','{{$value->age}}','{{$value->pet}}' )">edit</i>

                </td>
            </tr>
        @endforeach

        </tbody>
</table>



            <div class="itens_selectAll">
                <div class="markselect">
                    <input type="checkbox" id="check_allCheckbox" onclick="check_all(this.checked)">
                    <div class="checkAllDiv">
                        marcar todos total:0
                    </div>
                </div>

                    <button class="btnDelAll" onclick="Delete_All()" >Apagar Selecionados</button>


            </div>
        </div>
</div>

<div class="edition">
    <div class="itensEdition">
        <input id="editionName"  type="text" placeholder="name">
        <input id="editionAge"   type="text" placeholder="age">
        <input id="editionPet"   type="text" placeholder="pet">
        <button id="confirmEdition"  onclick="UpdateElementsConfirm()" class="button-10">confirmar</button>
        <button id="cancelEdition" onclick="UpdateElementsCancel()" class="button-10">cancelar</button>
    </div>

</div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="/js/find.js" ></script>
    <script src="/js/delete.js"></script>
    <script src="/js/editionandupdate.js"></script>
    <script src="/js/createperson.js"></script>
    <script src="/js/checkbox.js"></script>
    <script src="/js/delete.js" ></script>
    <script src="/js/deletemany.js"></script>
    <script>


        //token da aplicação
        var token = $('input[name=_token]').val()


        var checkInputs = document.querySelectorAll('#check')

        //Values para guardar os ids dos checkboxes
        var values = new Map()

        //Objetos necessarios para marcar os inputs
        var objCheckBoxes = {selecionado:false ,checkbox_lenght:checkInputs.length,checkAllDiv:$('.checkAllDiv'),
            check_allCheckbox:document.querySelector("#check_allCheckbox"),}

        //Chamadas ajax

        function callAJAX ({method,url,data,load='body'}){
            $.ajax({
                method,
                url,
                headers:{'X-CSRF-TOKEN':token},
                data,
                success:function(data){
                    $(load).html( data )
                }
            })
        }
        //DIV na parte de cima aonde aparece as mensagens de erros
        function SetTimeuout(msg){
            let selector = document.querySelector(".logs")
            selector.innerHTML = msg
            setTimeout(()=>{
                selector.innerHTML = ""
            },3000)
        }





    </script>
</body>
</html>
