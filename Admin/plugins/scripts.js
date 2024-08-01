document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("postForm");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // Prevent the form from submitting

        // Add your validation logic here
        const dateField = document.getElementById("date");
        const timeField = document.getElementById("time");

        // Example validation: Ensure the date is not in the past
        const currentDate = new Date();
        const selectedDate = new Date(dateField.value + " " + timeField.value);
        
        if (selectedDate < currentDate) {
            alert("Please select a date and time in the future.");
            return;
        }

        // If validation passes, you can submit the form
        form.submit();
    });
});
