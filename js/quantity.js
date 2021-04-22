// Initial Quantity Of Product
let quantity = 1;
// Get Dom Vars
const quantity_screen = document.querySelector('#product-quantity > input');
const quantity_inc = document.querySelector('#quantity-inc');
const quantity_dec = document.querySelector('#quantity-dec');
const price_html = document.querySelector('#price');
// Get Initial Price From HTML 
let price = parseFloat(price_html.innerHTML);
// Put Initial Quantity  In HTML
quantity_screen.value = quantity;
/**
**** Deal With Quantity & Price
*/ 
// Decrement Quantity
// source : https://stackoverflow.com/questions/57403296/get-total-price-added-up-with-jquery

quantity_dec.addEventListener('click',function() {
    if(quantity > 1){
        quantity--;
    }
    quantity_screen.value = quantity;
    // Calcule price Depending Of Quantity
    price_html.innerHTML = price * quantity;
});
// Increment Quantity
quantity_inc.addEventListener('click',function() {
    quantity++;
    quantity_screen.value = quantity;
    price_html.innerHTML = price * quantity;
});