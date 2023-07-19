    function myFunction() {
        var message, x;
        message = document.getElementById("p01");
        message.innerHTML = "";
        x = document.getElementById("name").value;
        try { 
            if(x == "")  throw "empty";
           
        }
        catch(err) {
            message.innerHTML = "Input is " + err;
        }
        var message, x;
        message = document.getElementById("p01");
        message.innerHTML = "";
        x = document.getElementById("email").value;
        try { 
            if(x == "")  throw "empty";
           
        }
        catch(err) {
            message.innerHTML = "Input is " + err;
        }
        var message, x;
        message = document.getElementById("p01");
        message.innerHTML = "";
        x = document.getElementById("message").value;
        try { 
            if(x == "")  throw "empty";
           
        }
        catch(err) {
            message.innerHTML = "Input is " + err;
        }
    }

    
    