

function Swal(result, title, txt,link) {
    setTimeout(function() {
        swal({
            type: result,
            title: title,
            text: txt,
            timer: 3000,
            showConfirmButton: true
        }, function() {
            window.location.href = link
        });
    });
}

