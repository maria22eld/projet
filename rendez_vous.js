document.addEventListener("DOMContentLoaded", function () {
    const btns = document.querySelectorAll(".btn");
    const serviceModal = document.querySelector(".service-modal");

    // Define service lists
    const medicalServices = ["Cardiologie", "Gastroentérologie", "Pneumologie", "Dermatologie", "Pédiatrie", "Neurologie", "Gynicologie", "Orthopédie", "Psychiatrie", "Oncologie", "Urologie"];
    const paramedicalServices = ["InfirmierInfirmière", "Ortophonie", "Kinésithérapie", "Diététiqueetnutrition", "Physiothérapie", "aide-soignantaide-soignante", "Ergothérapeute"];

    btns.forEach((btn) => {
        btn.addEventListener("click", function (event) {
            event.preventDefault();

            // Get the service list from the clicked button's data attribute
            const isMedical = btn.getAttribute("data-service-type") === "medical";
            const services = isMedical ? medicalServices : paramedicalServices;

            // Clear the content of the modal
            serviceModal.innerHTML = '';

            // Create a container for the service list
            const serviceListContainer = document.createElement("div");
            serviceListContainer.className = "service-list-container";

            // Create a ul element for the service list
            const serviceList = document.createElement("ul");
            services.forEach(service => {
                const listItem = document.createElement("li");
                listItem.textContent = service;

                // Add a click event listener to navigate to the corresponding section
                listItem.addEventListener("click", function () {
                    const sectionId = service;

                    // Hide all sections initially
                    hideAllSections();

                    // Show only the section with the matching ID
                    const targetSection = document.getElementById(sectionId);
                    if (targetSection) {
                        targetSection.style.display = "block";
                    }

                    // Close the modal
                    serviceModal.classList.remove("show-modal");
                    document.body.classList.remove("modal-open");

                    // Navigate to the services page and show the corresponding section
                    window.location.href = `services.html#${sectionId}`;
                });

                serviceList.appendChild(listItem);
            });

            serviceListContainer.appendChild(serviceList);

            serviceModal.appendChild(serviceListContainer);

            serviceModal.classList.add("show-modal");


            document.body.classList.add("modal-open");

            if (serviceListContainer.scrollHeight > serviceListContainer.clientHeight) {
                // Set overflow-y to scroll
                serviceListContainer.style.overflowY = "scroll";
            }
        });
    });

   
    document.addEventListener("click", function (event) {
        // Close the modal by default
        serviceModal.classList.remove("show-modal");

        document.body.classList.remove("modal-open");

        // If the click was inside the modal or on a button, prevent closing
        if (serviceModal.contains(event.target) || btns[0].contains(event.target) || btns[1].contains(event.target)) {
            serviceModal.classList.add("show-modal");
            document.body.classList.add("modal-open");
        }
    });


    function hideAllSections() {
        const sections = document.querySelectorAll(".service-section");
        sections.forEach(section => {
            section.style.display = "none";
        });
    }
});




