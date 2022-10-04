const contactForm = document.getElementById('contactForm')
contactForm.addEventListener('submit', (e) => {
    e.preventDefault()
    const email = e.target.elements['email'].value
    location.href = `contact.html?email=${email}`
})