function login() {
    //Hide login modal first
    $("#login").modal("hide");

    var accounts = [
        {
            "user": "admin",
            "pass": "password",
            "redirectTo": "admin-index.html"
        },
        {
            "user": "producer",
            "pass": "password",
            "redirectTo": "producer_view.html"
        },
        {
            "user": "consumer",
            "pass": "password",
            "redirectTo": "consumer_view.html"
        }
    ];
    var u = document.loginform.username.value;
    var p = document.loginform.password.value;
    var isValid = false;
    var accountId = 0;

    for(var i = 0; i < accounts.length; i++) {
        if(accounts[i].user == u && accounts[i].pass == p) {
            isValid = true;
            accountId = i;
        }
    }

    if(!isValid) {
        //Set error message
        var errorMsg = document.getElementById("errorMessage");
        errorMsg.innerHTML = "Invalid username/password!";

        //Show error modal
        $("#error").modal('show');
    } else {
        window.location.replace(accounts[accountId].redirectTo);
    }
}

function adjustModalMaxHeightAndPosition() {
    window.CP.stopExecutionOnTimeout(2);
    $('.modal').each(function () {
        window.CP.stopExecutionOnTimeout(1);
        if ($(this).hasClass('in') === false) {
            $(this).show();
        }
        var contentHeight = $(window).height() - 60;
        var headerHeight = $(this).find('.modal-header').outerHeight() || 2;
        var footerHeight = $(this).find('.modal-footer').outerHeight() || 2;
        $(this).find('.modal-content').css({
            'max-height': function () {
                return contentHeight;
            }
        });
        $(this).find('.modal-body').css({
            'max-height': function () {
                return contentHeight - (headerHeight + footerHeight);
            }
        });
        $(this).find('.modal-dialog').addClass('modal-dialog-center').css({
            'margin-top': function () {
                return -($(this).outerHeight() / 2);
            },
            'margin-left': function () {
                return -($(this).outerWidth() / 2);
            }
        });
        if ($(this).hasClass('in') === false) {
            $(this).hide();
        }
    });
}
if ($(window).height() >= 320) {
    $(window).resize(adjustModalMaxHeightAndPosition).trigger('resize');
}
