// Product Data [ Array Database ]
let products = [];
/*
**** Filter Products
*/
// Filter Products Function
const btn_filter = document.querySelector('#btn-filter');
btn_filter.addEventListener('click',function() {
    // Filter Products
    /*
    **  Brand Products
    */
    let brands = document.querySelectorAll("input[name='brand']:checked");
    /*
    **  Price Products
    */
    const prices = document.querySelectorAll("input[name='price']");
    /*
    **  Hard Disk Products
    */
    const hd_capacity = document.querySelector('#hd-capacity');
    const hd_type = document.querySelectorAll("input[name='hd-type']:checked");
    /*
    **  Rating
    */
   const rating = document.querySelectorAll("input[name='rating']:checked");
    brands = Array.from(brands).map(brand => brand.value);
    products = products.filter(product => {
        return brands.includes(product.brand) 
            && (product.price >= parseInt(prices[0].value) 
            && product.price <= parseInt(prices[1].value)) 
            && product.ram <= parseInt(memory_range.value) 
            && product.disk_capacity <= parseInt(hd_capacity.value)
            && product.disk_type == hd_type[0].value
            && product.rating <= parseInt(rating[0].value)
        ;
    });
    init_products(products);
});
/*
**  Memory Products
*/
const memory_range = document.querySelector('#memory-range');
const memory_range_value = document.querySelector('#memory-range-value');
//  Function to display range value in HTML <Span>
memory_range.addEventListener('change',function(){
    const value = memory_range.value;
    memory_range_value.innerHTML = value;
});
/*
**** Sorting Products
*/
const btn_sort = document.querySelector("select[name='sort-products']");
btn_sort.addEventListener('change',function(){
    if(this.value != ''){
        switch(this.value){
            // Filter By Name
            case 'name-asc' :
                products = products.sort((a,b) => {
                    let nameA = a.name.toUpperCase();
                    let nameB = b.name.toUpperCase();
                    if(nameA < nameB) {
                        return -1;
                    }
                    if(nameA > nameB) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
            case 'name-desc' :
                products = products.sort((a,b) => {
                    let nameA = a.name.toUpperCase();
                    let nameB = b.name.toUpperCase();
                    if(nameA > nameB) {
                        return -1;
                    }
                    if(nameA < nameB) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
            // Filter By Price
            case 'price-asc' :
                products = products.sort((a,b) => {
                    if(a.price < b.price) {
                        return -1;
                    }
                    if(a.price > b.price) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
            case 'price-desc' :
                products = products.sort((a,b) => {
                    if(a.price > b.price) {
                        return -1;
                    }
                    if(a.price < b.price) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
            // Filter By Rating
            case 'rating-asc' :
                products = products.sort((a,b) => {
                    if(a.rating < b.rating) {
                        return -1;
                    }
                    if(a.rating > b.rating) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
            case 'rating-desc' :
                products = products.sort((a,b) => {
                    if(a.rating > b.rating) {
                        return -1;
                    }
                    if(a.rating < b.rating) {
                        return 1;
                    }
                    return 0;
                } );
                init_products(products);
                break;
        }
    }
});

/*
**** Search Products Function
*/
function search_products(keyword){
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(this.readyState === 4 && this.status === 200){
            products = JSON.parse(this.responseText);
        }
    }
    xhr.open('GET',`./search-get.php?keyword=${keyword}`,false);
    xhr.send();
    init_products(products);
}
/*
****
*************** Helper Functions ***************
****
*/
// Initialize HTML - With Products Data
const products_list = document.querySelector('#products-list');
function init_products(products){
    let content = '';
    if(products.length > 0){
        products.forEach(product => {
            content += `<div class='product'>`;
            content += `<a href='./product.php?id=${product.id}'>`;
            content += `<img src='${product.image}'/>`;
            content += `</a>`;
            content += `<h2>${product.name}</h2>`;
            content += `<p>${product.price} $</p>`;
            switch(parseInt(product.rating)){
                case 0 : 
                    content += '<div>';
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += '</div>';
                    break;
                case 1 : 
                    content += '<div>';
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += '</div>';
                    break;
                case 2 :
                    content += '<div>';
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += '</div>'; 
                    break;
                case 3 : 
                    content += '<div>';
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += '</div>';
                    break;
                case 4 :
                    content += '<div>';
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star'></i>`;
                    content += '</div>'; 
                    break;
                case 5 :
                    content += '<div>';
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += `<i class='fa fa-star fa-orange'></i>`;
                    content += '</div>'; 
                    break;
            }
            content += `<button>Add to cart</button>`;
            content += `</div>`;
        });
    }else{
        content = 'No Laptop Founded !!';
    }
    products_list.innerHTML = content;
}
// Call The Function When First Load Page With Default Data
init_products(products);

/*
**** Reset To Default Product Data After [Sorting - Searching - Filtering]
*/
// Reset Data
const reset_products = document.querySelector("#brand-all");
reset_products.addEventListener('click',function(){
    search_products('');
    init_products(products);
});

