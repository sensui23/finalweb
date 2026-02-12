function addToCart(name, price) {
    let formData = new FormData();
    formData.append('product_name', name);
    formData.append('price', price);

    fetch('add_to_cart.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(newCount => {
        // I-update ang red counter sa cart icon
        document.getElementById('cart-count').innerText = newCount;
        alert(name + " added to cart!");
    })
    .catch(error => console.error('Error:', error));
}