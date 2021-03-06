(function(win,doc){
    'use strict';

    //Delete
    function confirmDel(event)
    {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo excluir?")){
           let ajax=new XMLHttpRequest();
           ajax.open("DELETE",event.target.parentNode.href);
           ajax.setRequestHeader('X-CSRF-TOKEN',token);
           ajax.onreadystatechange=function(){
               if(ajax.readyState === 4 && ajax.status === 200){
                   win.location.href="users";
               }
           };
           ajax.send();
        }else{
            return false;
        }
    }
    if(doc.querySelector('.delete')){
        let btn=doc.querySelectorAll('.delete');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDel,false);
        }
    }
})(window,document);
