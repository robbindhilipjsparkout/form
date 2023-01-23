
 
    //alert 

    function check() {
        let rr = document.getElementById('#rr');

         {   
            alert("Thank you submitting the form");
           
        }    
    } 





// dynamic form:

function addform(type){

    //
    var column = document.createElement('input');
    
    //
    var select_feild = document.createElement('select_feild');
    
    // 
    var append_inside = document.getElementById("feild");
    
    
//switch statement:
    
    switch (type){
        
    
    case "input":{
    
    
    column.setAttribute("type",type);
    column.setAttribute("value","");
    column.setAttribute("id","input");
    
    append_inside.appendChild(column);
    break;
    
    }
    
    case "checkbox":{
    
    column.setAttribute("type",type);
    column.setAttribute("value",type);
    column.setAttribute('id','checkbox');
    
    append_inside.appendChild(column);
    break;
    
    
    
    }
    
    case "radio":{
    
    column.setAttribute('type',type);
    column.setAttribute('value',type);
    column.setAttribute('id','radio');
    
    append_inside.appendChild(column);
    break;
    }
    
    
    
    
    //  "select feild ":{
        default:
    
    
    select_feild.setAttribute('type',type);
    
    
    //  select_feild.setAttribute ('value',"--please select any option--");
    select_feild.innerHTML = "--please select any option--";
    select_feild.setAttribute('id','selectfeild');
    
    
    append_inside.appendChild(select_feild);
    
    }
    
    }
    
    
        /*
document.querySelector('#rr').onclick = function () {

var password = document.querySelector('.password').value,
confirmpass = document.querySelector('.confirmpass').value;

 if (password == ""){
    alert("feilds should not be blank");
 }

else if (password != confirmpass){
    alert('password not match.');
    return false
}
else if (password == confirmpass){
    alert('password matched');
}
    return true
}
*/

/*
function addfeild(type)

{



    var element = document.createElement("input");

    element.setAttribute('type',type);
    element.setAttribute('value',type);
    element.setAttribute('name',type);

    var rob = document.getElementById('ro');
    rob.appendChild(element);
     
}



//buttton

var btn=document.querySelector("#btn");
btn.onclick=function(){


var div=document.createElement('div');

div.innerHTML=generateit();
document.getElementById('robb').appendChild(div);


}
function generateit(){

return  "<input type ="radio"><button>remove</button>";
}
*/


