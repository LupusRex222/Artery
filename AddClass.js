// AddClass.js

document.getElementById('classForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const image = document.getElementById('classImage').value;
    const title = document.getElementById('classTitle').value;
    const price = document.getElementById('classPrice').value;
    const description = document.getElementById('classDescription').value;
    
    if (isNaN(price) || price < 0 || price > 200) {
        alert('Please enter a valid price between 0 and 200.');
        return;
    }

    const newClass = {
        image,
        title,
        price,
        description
    };

    // Retrieve existing classes from localStorage or initialize an empty array
    let classes = JSON.parse(localStorage.getItem('classes')) || [];
    
    // Add the new class to the array
    classes.push(newClass);
    
    // Save the updated array back to localStorage
    localStorage.setItem('classes', JSON.stringify(classes));

    // Redirect back to the main classes page
    window.location.href = 'Classes.php';
});
