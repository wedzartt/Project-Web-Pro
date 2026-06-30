console.log('CONNECTED');

document.addEventListener('DOMContentLoaded', function () {

    // BUTTON

    const minus =
        document.querySelector('.minus');

    const plus =
        document.querySelector('.plus');

    // INPUT

    const qty =
        document.getElementById('ticket-qty');

});

const qtyInput = document.getElementById('ticket-qty');

const hiddenQty = document.getElementById('hidden-qty');

const plusBtn = document.querySelector('.plus');

const minusBtn = document.querySelector('.minus');


// PLUS BUTTON

plusBtn.addEventListener('click', () => {

    let value = parseInt(qtyInput.value);

    value++;

    qtyInput.value = value;

    hiddenQty.value = value;
    
});


// MINUS BUTTON

minusBtn.addEventListener('click', () => {

    let value = parseInt(qtyInput.value);

    if (value > 1) {

        value--;

        qtyInput.value = value;

        hiddenQty.value = value;
    }

});

const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {

    link.addEventListener('click', function(){

        navLinks.forEach(item => {
            item.classList.remove('active-link')
        })

        this.classList.add('active-link');

    });

});