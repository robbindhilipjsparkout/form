


//radio

function change1(){
                    
    var d=document.getElementById('change');
    var displaytext=d.options[d.selectedIndex].text;
    document.getElementById('text').value=displaytext;
    
    
    }
      
    
    
    //alert 

    function check() {
        let rr = document.getElementById('#rr');

         {   
            alert("Thank you submitting the form");
           
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