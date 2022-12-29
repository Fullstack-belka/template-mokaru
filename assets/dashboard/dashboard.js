const toggleNav = document.getElementById('menubtn')
const menu = document.getElementById('menu')


if(toggleNav){

    toggleNav.addEventListener("click", () => {
        menu.classList.toggle("menu_visible")
    }) 
    
    toggleNav.addEventListener("click", () => {
        menu.classList.toggle("none")
    }) 
}



const togglemovil = document.getElementById('movil-billetera')
const menuMovil = document.getElementById('sub-menu-movil')

if(togglemovil){


togglemovil.addEventListener("click", () => {
   menuMovil.classList.toggle("show-sub-menu")
})

}



const transactions = function(){

    function ocultar() {
        const depostiar_btn = document.getElementById("depositar-btn");
        const retirar_btn = document.getElementById("retirar-btn");

        const depositar_view = document.getElementById("depositar")
        const retirar_view = document.getElementById("retirar")

        const depositar_back = document.getElementById("depositar-back")
        const retirar_back = document.getElementById("retirar-back")

        depostiar_btn.addEventListener("click", () =>{
            depositar_view.classList.remove("noShow")
        })

        depositar_back.addEventListener("click", () =>{
            depositar_view.classList.add("noShow")
        })


        retirar_btn.addEventListener("click", () =>{
            retirar_view.classList.remove("noShow")
        })

        retirar_back.addEventListener("click", () =>{
            retirar_view.classList.add("noShow")
        })
        



    }

	function deposit_form() {

        $m("#deposit_form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $m(this);
            var actionUrl = form.attr('action');
            $m.ajax({
                type: "GET",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    window.location.href = "/checkout";
                }
            });
            
        });
	};

	


    return{
        init: function() {
            deposit_form();
            ocultar();
        }

        
    };

}();




$m(document).ready(function () {
	transactions.init();
});



//pop up retiros