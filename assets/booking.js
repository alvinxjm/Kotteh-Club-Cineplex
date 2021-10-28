var paxnumber

var movie 
var cinema
var date
var time
var pax



function seatselection(){

    movie = document.getElementById("movie").value;
    cinema = document.getElementById("cinema").value;
    date = document.getElementById("date").value;
    time = document.getElementById("time").value;
    pax = document.getElementById("pax").value;

    if (movie==""||cinema==""||date==""||time==""||pax==""){
        alert("you fucked up");
    }

    else{
        return true;
    }
}

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


function noduplicate(){

 
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

    else if(seat2!=""){
        if(regexp.test(seat2)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat1").value =""
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

    else if(seat3!=""){
        if(regexp.test(seat3)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat1").value =""
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

    else if(seat4!=""){
        if(regexp.test(seat4)){
            alert("Seat is Unavailable, please select another one");
            document.getElementById("seat1").value =""
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


    
  