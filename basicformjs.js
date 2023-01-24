
 
    //alert 

    function check() {
        let rr = document.getElementById('#rr');

         {   
            alert("Thank you submitting the form");
           
        }    
    } 

/*
//resset form

function removefeilds(){

let column = document.createElement('div');

var resset = document.getElementById("feild");

resset.removeChild();

column.setAttribute('id','feild');
document.getElementById('new_feild').removeChild(column);

}
*/

// dynamic form:

function addform(type){

    //
    var column = document.createElement('input');
   
    //
    var label1 = document.createElement("textlabel");
    //
    var label2 = document.createElement("textlabel");
    // 
    var append_inside = document.getElementById("feild");

    //
    var add_box = document.createElement('select');

    
   var select_feild = document.createElement('select_feild');
    




    switch (type){
        
    
    case "input":{
     label1.innerHTML='Type here';
    label1.setAttribute('type','text');
    label1.setAttribute('class','typehere');
    
    column.setAttribute("type",type);
    column.setAttribute("value","");
    column.setAttribute("id","input");

    
    append_inside.appendChild(column);
    append_inside.appendChild(label1);
    break;
    
    }
    
    case "checkbox":{

        label2.innerHTML='checkbox';
        label2.setAttribute('type','text');
        label2.setAttribute('class','chkbox');
        
    
    column.setAttribute("type",type);
    column.setAttribute("value",type);
    column.setAttribute('id','checkbox');
    
    append_inside.appendChild(column);
    append_inside.appendChild(label2);
    break;
    
    
    
    }
    
    case "radio":{



        label2.innerHTML='radiobtn';
        label2.setAttribute('type','text');
        label2.setAttribute('class','radiobtn');
    
    column.setAttribute('type',type);
    column.setAttribute('value',type);
    column.setAttribute('id','radio');
    
    append_inside.appendChild(column);
    append_inside.appendChild(label2);
    break;
    }
    
    
    
   
        case "addbox":{

add_box.innerHTML=


"<option>form1</option><option>form2</option><option>form3</option>";

add_box.setAttribute('id','selectf');

label2.innerHTML = 'select_feild';
label2.setAttribute('id','selectL');

append_inside.appendChild(label2);
append_inside.appendChild(add_box);
break;
        }
    
    
default:


    select_feild.setAttribute('type',type);

alert('--please select an option--')



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


