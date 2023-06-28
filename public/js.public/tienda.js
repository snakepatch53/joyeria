const $form = document.querySelector("#form");
const $btn_order_square = document.querySelector("#btn-order-square");
const $btn_order_list = document.querySelector("#btn-order-list");
const $btn_shopping_cart = document.querySelector("#btn-shopping-cart");
const $shopping_cart_list = document.querySelector("#shopping-cart-list");

$btn_order_square.onclick = (evt) => change_layotu($btn_order_square);
$btn_order_list.onclick = (evt) => change_layotu($btn_order_list);
$btn_shopping_cart.onclick = (evt) => toggle_shopping_cart();

function toggle_shopping_cart() {
    $shopping_cart_list.classList.toggle("active");
}

function change_layotu(button) {
    const layout = button.getAttribute("data-layout");
    if (layout == "list") $form.classList.add("list");
    else $form.classList.remove("list");
}
