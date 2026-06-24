document.addEventListener("DOMContentLoaded", () => {

    // Auto close alert
    const alerts = document.querySelectorAll('.alert');

    alerts.forEach(alert => {

        setTimeout(() => {

            alert.style.opacity = "0";

            setTimeout(() => {
                alert.remove();
            },500);

        },3000);

    });

});