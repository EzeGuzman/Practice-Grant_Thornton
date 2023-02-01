const usuarioEmailField = document.querySelector("#email");
const rememberCheckBox = document.querySelector("#remember_me");

//Función para guardar en el localStorage el valor del input donde se introduce el DNI.
const guardarUsuarioEmail = () => {

    if (rememberCheckBox.checked) {

        let usuarioEmail = usuarioEmailField.value;

        if(usuarioEmail !== "") 
            localStorage.setItem("usuarioEmail", usuarioEmail);      
        
    } else {
        
        if(localStorage.getItem("usuarioEmail"))
            localStorage.removeItem("usuarioEmail");
    }
}

//Función para obtener el DNI del localStorage y asignarlo en el input donde se introduce el DNI.
const obtenerUsuarioEmail = () => {

    if (localStorage.getItem("usuarioEmail")) {

        usuarioEmailField.value = localStorage.getItem("usuarioEmail");
        rememberCheckBox.checked = true;
    }
}

rememberCheckBox.addEventListener("click", () => {
    guardarUsuarioEmail();
});

obtenerUsuarioEmail();