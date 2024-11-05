class Usuario{
    constructor(objData){
        this._objUsuario = objData;
    }

    iniciarSesion(){
        let objData = new FormData();
        objData.append("documento", this._objUsuario.documento);
        objData.append("password", this._objUsuario.password);
        objData.append("iniciarSesion", this._objUsuario.iniciarSesion);

        fetch("controlador/usuarioControlador.php",{
            method: 'POST',
            body: objData
        })
        .then(response => response.json()).catch(error=>{
            console.log(error);
        })
        .then(response => {
            if (response["codigo"] == "200") {
                    window.location = "inicio";
            } else {
                Toastify({
                    text: response["mensaje"],
                    gravity: "bottom", // top or bottom
                    position: "right",
                    duration: 3000,
                    style: { background: "linear-gradient(to right, #ff5f6d, #ffc371)" }
                }).showToast();                 
            }
        });

    }

}