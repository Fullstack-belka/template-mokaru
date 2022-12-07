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
        }
    };

}();

$m(document).ready(function () {
	transactions.init();
});