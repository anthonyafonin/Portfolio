var $parent, // clicked item parent element
    alertText, // text of list item
    alertType, // alert type, ID of parent element
    confMsg, // Modal Confirmation Message
    confTitle, // Modal Confirmation Title
    modalColor; // Modal Color Scheme

// Assign modal content, then fires modal based on which alert was clicked
$('.list-group-item a').click(function(e) {

    // Store listGroup element in variable
    $parent = $(this).parents('.list-group');
    alertText = $(this).parents('.list-group-item').find('.alertLabel').text();
    alertType = $parent.attr('id');

    // Set modal color scheme and response text based on which parent item was clicked
    if (alertType == 'test') {
        modalColor = '#00cc00';
        confTitle = "TEST Alert";
        confMsg = "Are you sure you want to send a TEST alert of " + alertText + "?";
    } else if (alertType == 'real') {
        modalColor = 'red';
        confTitle = "REAL Alert";
        confMsg = "Are you sure you want to send a REAL alert of " + alertText + "?";
    }

    // Set modal text and color
    $('#myModal .modal-footer').css('display', 'block');
    $('#myModal .modal-title').text(confTitle);
    $('#myModal .modal-body').text(confMsg);
    $('#myModal .modal-header,#myModal .modal-footer #submit').css('background-color', modalColor)
});

// Send alert
// Show success message and hide modal after 3 seconds.
function sendAlert() {
    $('#myModal .modal-body').text('Alert has been sent.');
    $('#myModal .modal-footer').css('display', 'none');
    // SEND POST REQUEST TO HAWAII MISSLE SERVER HERE

    setTimeout(function() {
        $('#myModal').modal('hide');
    }, 2500);
}
