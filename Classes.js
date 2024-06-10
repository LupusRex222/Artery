// Function to delete a class from local storage 
function deleteClass(index) {
    let classes = JSON.parse(localStorage.getItem('classes')) || [];
    classes.splice(index, 1); // Remove the class at the specified index
    localStorage.setItem('classes', JSON.stringify(classes));
    renderClasses(); // Re-render the classes
}

document.addEventListener('DOMContentLoaded', () => {
    renderClasses();
});

function renderClasses() {
    const classes = JSON.parse(localStorage.getItem('classes')) || [];
    const classContainer = document.getElementById('classContainer');

    classContainer.innerHTML = '';

    classes.forEach((classItem, index) => {
        const newClassDiv = document.createElement('div');
        newClassDiv.classList.add('Class1');
        newClassDiv.innerHTML = `
            <a href="class.php"><img src="${classItem.image}" alt="${classItem.title}"></a>
            <div class="Upper1">
                <div class="title">                           
                    <h3>${classItem.title}</h3>
                </div>
                <div class="price">
                    <div class="banner1">
                        <p>${classItem.price}$</p>
                    </div>
                </div>
            </div>
            <div class="mtext">
                <p>${classItem.description}</p>
            </div>
            <button class="delete-btn" onclick="deleteClass(${index})">Delete</button>
        `;
        classContainer.appendChild(newClassDiv);
    });
}
