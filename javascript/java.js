




let input=document.getElementById('input')
let input2=document.getElementById('input2')
let input3=document.getElementById('input3')
let input4=document.getElementById('input4')
let btn =document.getElementById('fottonscence')
 

function addNewUser(){
    let data = input.value;
    if(data.trim()=="" || data.length <10 || data.length>20){
        document.cookie = data;


    window.alert("please enter valid phone number ")

    
    }
    else{
        //allTasks.innerHTML = data;
        //let newdiv=  document.createElement('div');
        //newdiv.classList.add('alert');
        //newdiv.classList.add('alert-info');
        //newdiv.append(data);
        //allTasks.append(newdiv);
        
        }
        }
        btn.addEventListener('click' ,addNewUser)


        function addNewUser2(){
            let data2 = input2.value;
            if(data2.trim()=="" || data2.length <8 || data2.length>20){
                document.cookie = data2;
        
        
            window.alert("please enter valid password   ")
        
            
            }
            else{
                //allTasks.innerHTML = data;
                //let newdiv=  document.createElement('div');
                //newdiv.classList.add('alert');
                //newdiv.classList.add('alert-info');
                //newdiv.append(data);
                //allTasks.append(newdiv);
                
                }
                }
                btn.addEventListener('click' ,addNewUser2)

 //___________________________________________________________


 checkbtn=getElementById('checkbtn')

 function checkAPP(){
var txt
if(confirm("U Need to check on the information in the another page ")){

    window.alert("If u want to change or delete the appoinmwnt u need to contact us   ")
        
 


}
else{
    txt="u pressed cancel"
    document.getElementById("demo").innerHTML= txt;
     


}

checkbtn.addEventListener('onclick' ,checkAPP)




 }

