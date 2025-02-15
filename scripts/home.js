let mobile_nav=document.querySelector("#mobile-menu")
let mobile_menu_button=document.querySelector("#menu-button")
let close_mobile_menu_option=document.querySelector("#close-menu");

mobile_menu_button.addEventListener("click",function(e){
   e.preventDefault()
   mobile_nav.style.visibility="visible"
   mobile_nav.style.right="0"
})

close_mobile_menu_option.addEventListener("click",function(){
    mobile_nav.style.right="-100%"
    mobile_nav.style.visibility="hidden"
})