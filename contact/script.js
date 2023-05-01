// This script ensures the proper measures are met for when an email is to be sent though our contact page

//HTML page has been loaded and parsed
document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = e.target.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

// Ensures fields are filled
function validateForm(form) {
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const message = form.message.value.trim();

    if (!name || !email || !message) {
        alert('Please fill in all fields.');
        return false;
    }

    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    return true;
}

//Regex for email
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

//
function submitForm(e) {
    e.preventDefault();

    const form = e.target;

    if (!validateForm(form)) {
        return;
    }

    const formData = new FormData(form);
    const xhr = new XMLHttpRequest();

    xhr.open('POST', 'send_email.php', true);
    xhr.onreadystatechange = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                alert('Thank you! Your message has been sent.');
                form.reset();
            } else {
                alert('There was a problem with your submission. Please try again.');
            }
        }
    };
    xhr.send(formData);
}

//Checks our 'content' section in contact page for submission
document.addEventListener('DOMContentLoaded', () => {
    // ... (previous smooth scrolling code) ...

    const contactForm = document.querySelector('#contact form');
    contactForm.addEventListener('submit', submitForm);
});
