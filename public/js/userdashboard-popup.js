function showPackageDetails(packageId) {
    // Fetch package details dynamically using AJAX
    fetch(`/packages/${packageId}`)
        .then(response => response.json())
        .then(packageDetails => {
            // Update the modal with dynamic package details
            document.getElementById('modalImage').src = `/storage/${packageDetails.image}`;
            document.getElementById('modalName').textContent = packageDetails.name;
            document.getElementById('modalDescription').textContent = packageDetails.description;
            document.getElementById('modalPrice').textContent = packageDetails.price;
            document.getElementById('modalStartPoint').textContent = packageDetails.startPoint;
            document.getElementById('modalEndPoint').textContent = packageDetails.endPoint;

            // Set the hidden input fields for the form
            document.getElementById('package_id').value = packageDetails.id;
            document.getElementById('payment_amount').value = packageDetails.price;

            // Show the modal
            document.getElementById('package-modal').style.display = "block";
        })
        .catch(error => {
            console.error("Error fetching package details:", error);
            alert("Failed to load package details. Please try again.");
        });
}

function closeModal() {
    // Close the modal
    document.getElementById('package-modal').style.display = "none";
}

// Get the modal and close button elements
const modal = document.getElementById("package-modal");
const closeBtn = document.querySelector(".close");

// Open Modal Function: Fetch and display package details when opening the modal
function openPackageModal(packageId) {
    // Fetch package details and populate the modal
    showPackageDetails(packageId);
}

// Close Modal when clicking on the close button
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Close Modal when clicking outside of the modal
window.addEventListener("click", (e) => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
});
