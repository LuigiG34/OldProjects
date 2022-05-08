function generatePassword(){
    const chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ?!$*:;,./-+%=()[]{}#_0123456789';
    const passwordLength = 12;
    let password = "";

    for (var i=0; i<passwordLength; i++){
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber+1);
    }
    document.getElementById("password").value = password
}