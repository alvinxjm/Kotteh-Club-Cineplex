var paxnumber

var movie 
var cinema
var date
var time
var pax

var bookingfoundshow = document.getElementById("bookingfound");






function payment(){
    var particulars = document.getElementById("particulars");

    var seat1 = document.getElementById("seat1").value;
    var seat2 = document.getElementById("seat2").value;
    var seat3 = document.getElementById("seat3").value;
    var seat4 = document.getElementById("seat4").value;


    if(paxnumber="1"){
        if (seat1==""){
            alert("you fucked up");
            return;
        }
        else{
            particulars.style.display = "block";
        }
    }

    else if(paxnumber="2"){
        if (seat1==""||seat2==""){
            alert("you fucked up");
            return;
        }
        else{
            particulars.style.display = "block";
        }
    }

    else if(paxnumber="3"){
        if (seat1==""||seat2==""||seat3==""){
            alert("you fucked up");
            return;
        }
        else{
            particulars.style.display = "block";
        }
    }

    else if(paxnumber="4"){
        if (seat1==""||seat2==""||seat3==""||seat4==""){
            alert("you fucked up");
            return;
        }
        else{
            particulars.style.display = "block";
        }
    }
}


function noduplicate1(){

 
    var seat1 = document.getElementById("seat1").value;
    var seat2 = document.getElementById("seat2").value;
    var seat3 = document.getElementById("seat3").value;
    var seat4 = document.getElementById("seat4").value;
    var regexp = /[(]/;
    
    if(seat1!=""){
        if(regexp.test(seat1)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat1").value =""
            return true
        }
        else{
            if(seat1==seat2||seat1==seat3||seat1==seat4){
                alert("Invalid, you have choosen a duplicate seat");
                document.getElementById("seat1").value =""
            }
            return false;
        }
        
        
    }
}
function noduplicate2(){
    var seat1 = document.getElementById("seat1").value;
    var seat2 = document.getElementById("seat2").value;
    var seat3 = document.getElementById("seat3").value;
    var seat4 = document.getElementById("seat4").value;
    var regexp = /[(]/;
    if(seat2!=""){
        if(regexp.test(seat2)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat2").value =""
            return true
        }
        else{
            if(seat2==seat1||seat2==seat3||seat2==seat4){
                alert("Invalid, you have choosen a duplicate seat");
                document.getElementById("seat2").value =""
            }
            return false;
        }
    }
}
function noduplicate3(){
    var seat1 = document.getElementById("seat1").value;
    var seat2 = document.getElementById("seat2").value;
    var seat3 = document.getElementById("seat3").value;
    var seat4 = document.getElementById("seat4").value;
    var regexp = /[(]/;
    if(seat3!=""){
        if(regexp.test(seat3)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat3").value =""
            return true
        }
        else{
            if(seat3==seat1||seat3==seat2||seat3==seat4){
                alert("Invalid, you have choosen a duplicate seat");
                document.getElementById("seat3").value =""
            }
            return false;
        }
    }
}
function noduplicate4(){
    var seat1 = document.getElementById("seat1").value;
    var seat2 = document.getElementById("seat2").value;
    var seat3 = document.getElementById("seat3").value;
    var seat4 = document.getElementById("seat4").value;
    var regexp = /[(]/;
    if(seat4!=""){
        if(regexp.test(seat4)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat4").value =""
            return true
        }
        else{
            if(seat4==seat1||seat4==seat2||seat4==seat3){
                alert("Invalid, you have choosen a duplicate seat");
                document.getElementById("seat4").value =""
            }
            return false;
        }
    }

}

function namecheck(){
    var name = document.getElementById("name").value;
    var regexp = /^([A-z',.\s?]+)$/;

    if(regexp.test(name)){
        return true;
    }
    else{
        alert("Name has incorrect format, please enter alphabetical symbols.");
        document.getElementById("name").value="";
        return false;
    }
}
function contactcheck(){
    var contactnumber = document.getElementById("contactnumber").value;
    var regexp = /^[0-9]*$/;

    if(contactnumber.length==8){
        if(regexp.test(contactnumber)){
            return true;
        }
        else{
            alert("Contact number has incorrect format, please enter numbers only.");
            document.getElementById("contactnumber").value="";
            return false;
        }
    }
    else{
        alert("Contact number has incorrect format");
        document.getElementById("contactnumber").value="";
    }
}


    
  