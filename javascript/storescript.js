// Datos de ejemplo de productos
const products = [
    { id: 1, name: 'Lavanda', description: 'Hermosa planta aromática con flores violetas y fragancia relajante.', price: 7999, image: 'images/storeImages/lavanda.png' },
    { id: 2, name: 'Rosa', description: 'Clásica flor de múltiples colores y fragancia embriagadora', price: 5999, image: 'images/storeImages/rosa.png' },
    { id: 3, name: 'Orquídea', description: 'Exótica y elegante, con flores exquisitas en diversos tonos', price: 9999, image: 'images/storeImages/orquidea.png' },
    { id: 4, name: 'Suculenta', description: 'Pequeña planta de aspecto peculiar y resistente a la sequía', price: 3999, image: 'images/storeImages/suculenta.jpg' },
    { id: 5, name: 'Helecho', description: 'Planta de follaje frondoso y textura delicada, ideal para interiores.', price: 3499, image: 'images/storeImages/helecho.jpg' },
    { id: 6, name: 'Bromelia', description: 'Espectacular planta tropical con hojas brillantes y flores vivaces', price: 4499, image: 'images/storeImages/bromelia.jpg' },
    { id: 7, name: 'Cactus', description: 'Adaptado a la aridez, requiere poca agua y presenta espinas protectoras', price: 2999, image: 'images/storeImages/cactus.jpg' },
    { id: 8, name: 'Tulipán', description: 'Flor emblemática, elegante y vibrante en variedad de colores', price: 4999, image: 'images/storeImages/tulipan.jpg' },
    { id: 9, name: 'Lirio', description: 'Delicado y majestuoso, con flores grandes y fragancia suave', price: 5999, image: 'images/storeImages/lirio.png' },
    { id: 10, name: 'Begonia', description: 'Planta decorativa con flores llamativas y hojas de tonalidades vivas', price: 3999, image: 'images/storeImages/begonia.png' },
    { id: 11, name: 'Geranio', description: 'Coloridas flores agrupadas en racimos y aroma refrescante', price: 3499, image: 'images/storeImages/geranio.jpg' },
    { id: 12, name: 'Hortensia', description: 'Arbusto de flores en forma de pompones en tonos pastel o intensos', price: 4499, image: 'images/storeImages/hortensia.jpg' }
    // Agrega más productos aquí...
  ];
  
  const productsPerPage = 12; // Cantidad de productos por página
  let currentPage = 1; // Página actual
  
  // Elementos del DOM
  const productList = document.getElementById('product-list');
  const pagination = document.getElementById('pagination');
  
 // Función para mostrar los productos en una página específica
function displayProducts(page) {
    const startIndex = (page - 1) * productsPerPage;
    const endIndex = startIndex + productsPerPage;
    const productsToShow = products.slice(startIndex, endIndex);
  
    productList.innerHTML = '';
  
    productsToShow.forEach(product => {
      const productItem = document.createElement('div');
      productItem.classList.add('product');
      productItem.innerHTML = `
        <img src="${product.image}" alt="${product.name}">
        <h3>${product.name}</h3>
        <p>${product.description}</p>
        <p>Precio: ₡ ${product.price.toFixed(2)}</p>
        <button class="add-to-cart-btn" data-id="${product.id}">Agregar al carrito</button>
      `;
      productList.appendChild(productItem);
    });
  }
  
  // Función para generar los enlaces de paginación
  function generatePaginationLinks() {
    const totalPages = Math.ceil(products.length / productsPerPage);
    pagination.innerHTML = '';
  
    for (let i = 1; i <= totalPages; i++) {
      const pageLink = document.createElement('a');
      pageLink.classList.add('page-link');
      pageLink.textContent = i;
      pageLink.addEventListener('click', () => {
        currentPage = i;
        displayProducts(currentPage);
      });
      pagination.appendChild(pageLink);
    }
  }
  
  // Evento click para agregar productos al carrito
  productList.addEventListener('click', event => {
    if (event.target.classList.contains('add-to-cart-btn')) {
      const productId = parseInt(event.target.getAttribute('data-id'));
      showSidebar(); // Mostrar el sidebar después de agregar un producto
    }
  });

// Función para mostrar el sidebar
function showSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.add('show');
    document.body.classList.add('no-scroll'); // Agrega esta línea para deshabilitar el desplazamiento del cuerpo de la página
  }
  
  // Función para ocultar el sidebar
  function hideSidebar() {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.remove('show');
    document.body.classList.remove('no-scroll'); // Agrega esta línea para habilitar el desplazamiento del cuerpo de la página
  }
  
  
  // Mostrar los productos y generar los enlaces de paginación en la página inicial
  displayProducts(currentPage);
  generatePaginationLinks();

  // Función para mostrar un mensaje en un popup personalizado
    function showAlert(message) {
    alert(message);
  }

  // Datos del carrito de compras
let cartItems = [];

// Elementos del DOM
const cartTotal = document.getElementById('cart-total');
const checkoutBtn = document.getElementById('checkout-btn');

// Función para agregar un producto al carrito
function addToCart(productId) {
  const product = products.find(item => item.id === productId);
  if (product) {
    cartItems.push(product);
    updateCartTotal();
    showAlert('Producto agregado al carrito', product);
  }
}

// Función para actualizar el total del carrito
function updateCartTotal() {
  const total = cartItems.reduce((accumulator, item) => accumulator + item.price, 0);
  cartTotal.textContent = total.toFixed(2);
}

// Evento click para agregar productos al carrito
productList.addEventListener('click', event => {
  if (event.target.classList.contains('add-to-cart-btn')) {
    const productId = parseInt(event.target.getAttribute('data-id'));
    addToCart(productId);
  }
});



// Evento click para realizar el pedido
checkoutBtn.addEventListener('click', () => {
  // Agregar lógica para procesar el pedido y redirigir a la página de checkout aquí
  showAlert('Pedido realizado con éxito');
  resetPage();
});

// Función para restablecer la página al estado original
function resetPage() {
    // Restablecer el carrito de compras
    cartItems = [];
    updateCartTotal();
  
    // Ocultar el sidebar
    hideSidebar();
  
    // Volver a mostrar los productos y generar los enlaces de paginación en la página inicial
    currentPage = 1;
    displayProducts(currentPage);
    generatePaginationLinks();
  }