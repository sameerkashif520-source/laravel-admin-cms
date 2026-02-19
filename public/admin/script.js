// Mobile Sidebar Toggle
function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("active");
    document.querySelector(".overlay").classList.toggle("active");
}

// Dropdown Toggle
function toggleDropdown(id) {
    const dropdown = document.getElementById(id);
    const link = document.querySelector(
        "[onclick=\"toggleDropdown('" + id + "')\"]",
    );

    dropdown.classList.toggle("open");
    link.classList.toggle("open");
}

// Logout Confirmation
function logoutConfirmation() {
    Swal.fire({
        title: "Are you sure?",
        text: "You want to logout from admin panel?",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#667eea",
        cancelButtonColor: "#e74c3c",
        confirmButtonText: "Yes, Logout!",
        cancelButtonText: "Cancel",
        reverseButtons: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector("#logoutForm").submit();
        }
    });
}

// CTA updation
var ctaBtn = document.getElementById("updateCTABtn");
if (ctaBtn) {
    ctaBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the CTA section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("ctaUpdateForm").submit();
            }
        });
    });
}

// Contact updation
var contactBtn = document.getElementById("updateContactBtn");
if (contactBtn) {
    contactBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Contact section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("contactUpdateForm").submit();
            }
        });
    });
}

// Home updation
var homeBtn = document.getElementById("updateHomeBtn");
if (homeBtn) {
    homeBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Home section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("homeUpdateForm").submit();
            }
        });
    });
}

// About updation
var aboutBtn = document.getElementById("updateAboutBtn");
if (aboutBtn) {
    aboutBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the About section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("aboutUpdateForm").submit();
            }
        });
    });
}

// Services updation
var servicesBtn = document.getElementById("updateServicesBtn");
if (servicesBtn) {
    servicesBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Services section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("servicesUpdateForm").submit();
            }
        });
    });
}

// Service Details updation
var serviceDetailsBtn = document.getElementById("updateServiceDetailsBtn");
if (serviceDetailsBtn) {
    serviceDetailsBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Service Details section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("serviceDetailsForm").submit();
            }
        });
    });
}

// Projects updation
var projectsBtn = document.getElementById("updateProjectsBtn");
if (projectsBtn) {
    projectsBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Projects section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("projectsUpdateForm").submit();
            }
        });
    });
}

// Faq updation
var faqBtn = document.getElementById("updateFaqBtn");
if (faqBtn) {
    faqBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the FAQ section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("faqUpdateForm").submit();
            }
        });
    });
}

// Contact Us updation
// Faq updation
var contactUsBtn = document.getElementById("updateContactUsBtn");
if (contactUsBtn) {
    contactUsBtn.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You want to update the Contact Us section?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, update it!",
            cancelButtonText: "Cancel",
            reverseButtons: true,
            allowOutsideClick: false,
            allowEscapeKey: false,
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("contactUsUpdateForm").submit();
            }
        });
    });
}
