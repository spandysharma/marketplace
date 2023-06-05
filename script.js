// This script is for generating unique ids to track form submissions.
// It requires one-time installation of node and npm.

// Previously I had used uuid which is a more private and secure manner
// of generating unique tokens. However, due to the numerous applications
// needed to be installed to run it on client-side server, it was making
// my application bloated.

// Hence, I have created my own function for generating the 
// tokens/confirmation codes.

function randomString() {  
    //initialize a variable having alpha-numeric characters  
    var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";  

    //specify the length for the new string to be generated  
    var string_length = 8;  
    var id = '';  

    //put a loop to select a character randomly in each iteration  
    for (var i=0; i<string_length; i++) {  
        var rnum = Math.floor(Math.random() * chars.length);  
        id += chars.substring(rnum,rnum+1);  
    }  
    return id
}

randS = randomString();
document.getElementById('productId').value = randS;
