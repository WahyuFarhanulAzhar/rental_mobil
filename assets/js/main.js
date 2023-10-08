$(document).ready(function() {
    // Function to toggle password visibility
    $('.toggle-password').click(function(){
        // Toggle the password field type between "password" and "text"
        var passwordField = $(this).prev('input');
        var fieldType = passwordField.attr('type');
        
        if (fieldType === 'password') {
            passwordField.attr('type', 'text');
            $(this).removeClass('fa-eye-slash').addClass('fa-eye');
        } else {
            passwordField.attr('type', 'password');
            $(this).removeClass('fa-eye').addClass('fa-eye-slash');
        }
    });
});
