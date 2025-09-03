document.addEventListener("DOMContentLoaded", function() {

    const form = document.getElementById("contact-me-form");
    const phoneInput = document.getElementById("phonenumber");

    //---------------
    // FORM HANDLING
    //---------------
    if(form) {
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // prevent default form submission

            const formData = new FormData(form);
            
        })
    }

    //-------------------------
    // PHONE NUMBER FORMATTING
    //-------------------------
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