document.getElementById("addDetailsButtonNavbar").addEventListener("click", function () {
    $('#addDetailsModal').modal('show');
});

document.getElementById("logoutButton").addEventListener("click", function () {
    document.querySelector(".container").classList.add("transition-hidden");
    setTimeout(function () {
        window.location.href = "logout.php";
    }, 500);
});

$(document).ready(function () {
    $("#updateDetailsForm").submit(function (event) {
        event.preventDefault();
        var formData = $(this).serialize();
        console.log("update form submitted:", formData);
        $.ajax({
            type: "POST",
            url: "update_details.php",
            data: formData,
            success: function (response) {
                console.log(formData);
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    });
});

document.getElementById("saveButton").addEventListener("click", function () {
    window.location.reload();
});



$(document).ready(function () {
    $('#updateDetailsForm').submit(function (e) {
        e.preventDefault();
    });
});

$(document).ready(function () {
    $("#updateDetailsForm").submit(function (event) {
        event.preventDefault();
        var newPassword = $("#newPassword").val();
        var confirmPassword = $("#confirmPassword").val();

        if (newPassword != confirmPassword) {
            $("#passwordMismatchPopup").modal("show");
        } else {

            $.ajax({
                type: "POST",
                url: "update_profile.php", 
                data: $(this).serialize(),
                success: function (response) {
                    var responseData = JSON.parse(response);
                    if (responseData.status === "success") {
                        console.log(response);
                    } else {
                        console.log(response);
                    }
                },
                error: function (xhr, status, error) {
                   
                }
            });
        }
    });
});

$(document).ready(function () {
    $('#openDetailsModal').click(function () {
        $('#detailsModal').modal('show'); 
    });
});
