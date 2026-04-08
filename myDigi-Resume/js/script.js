$(document).ready(function() {
    
    // 1. Initialize Bootstrap Tooltips & Popovers
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

    // 2. jQuery Event: Handle Hover Event on Cards
    $('.hover-effect').hover(
        function() { $(this).css("transform", "scale(1.05)"); },
        function() { $(this).css("transform", "scale(1)"); }
    );

    // 3. jQuery Event: Trigger Modal Dynamically on Project Button Click
    $('.project-btn').click(function() {
        $('#dynamicModal').modal('show');
    });

    // 4. jQuery Form handling (Validation classes, Show/Hide alert)
    $('#contactForm').submit(function(e) {
        e.preventDefault(); // Prevent page reload
        
        let name = $('#nameInput').val();
        let email = $('#emailInput').val();

        // Add validation classes dynamically based on input
        if(name.length > 0) {
            $('#nameInput').removeClass('is-invalid').addClass('is-valid');
        }
        if(email.length > 0) {
            $('#emailInput').removeClass('is-invalid').addClass('is-valid');
        }

        // Show element using jQuery (fade in), wait 3 seconds, then hide it (fade out)
        $('#formSuccessAlert').fadeIn().delay(3000).fadeOut();
        
        // Optional: clear the form after submission
        $('#contactForm')[0].reset(); 
    });
});
