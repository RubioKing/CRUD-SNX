(function (win,doc) {
    'use strict';
    // FUNÇÃO PARA DELETAR UM CLIENTE
    function confirmDel(event) {
        event.preventDefault();
        var url = event.target.parentNode.href;
        let token = doc.getElementsByName("_token")[0].value;

        if(confirm("Deseja mesmo apagar?"))
        {
            let ajax = new XMLHttpRequest();

            ajax.open('DELETE', url);
            
            ajax.setRequestHeader('X-CSRF-TOKEN', token);

            ajax.send();

            ajax.onreadystatechange = function() {
                if(ajax.readyState === 4 && ajax.status === 200)
                {
                    console.log("Deu certo!");
                }
            };
            
        }
        else
        {
            return false;
        }

    }

    if(doc.querySelector('.jsDel')){
        let btn = doc.querySelectorAll('.jsDel');

        for ( let i = 0; i < btn.length; i++)
        {
            btn[i].addEventListener('click', confirmDel);
        }
    }

})(window,document);