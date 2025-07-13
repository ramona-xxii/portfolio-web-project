document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.getElementById("phonenumber");

    // check if anything in the phone number field first
    if(phoneInput){
        // only allow digits while typing
        phoneInput.addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, "");
        })
    }

    // format phone number to xxx-xxx-xxxx on blur
    phoneInput.addEventListener("blur", function(){
        const input = this.value.replace(/\D/g, "");
        if(input.length === 10){
            this.value = input.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
        }
    })

});