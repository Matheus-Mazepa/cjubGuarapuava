$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function sendPatchRequest(route, data) {
    $.ajax({
        url: route,
        type: 'PUT',
        data: data,
        success: function(data) {
            alert(data);
            window.location.reload();
        }
    });
}
function confirmPayment(element) {

    let id = element.getAttribute('data-id');
    let route = '/participantes/' + id;
    sendPatchRequest(route, {paid_out: true});
}
let input = document.getElementById("cpf");

input.addEventListener("keydown", function (event) {
    this.value = mCPF(this.value);
});

let inputPhone = document.getElementById("phone");

inputPhone.addEventListener("keydown", function (event) {
    this.value = mPhone(this);
});

let inputDate = document.getElementById("birth_date");

inputDate.addEventListener("keydown", function (event) {
    this.value = mData(this);
});

function mData(campoData){
    let data = campoData.value;
    if (data.length >= 11) {
        return data.substr(0, data.length - 1);
    }
    else {
        data = data.replace(/\D/g, "");
        data = data.replace(/(\d{2})(\d)/, "$1/$2");
        data = data.replace(/(\d{2})(\d)/, "$1/$2");
    }
    return data;
}

function mPhone(phoneField){
    let phone = phoneField.value;
    if (phone.length >= 16) {
        return phone.substr(0, phone.length - 1);
    }
    else {
        phone = phone.replace(/\D/g, "");
        phone = phone.replace(/(\d{2})(\d)/, "($1) $2");
        phone = phone.replace(/(\d{4})(\d)/, "$1-$2");
    }

    return phone;
}

function mCPF(cpf) {
    if (cpf.length > 14) {
        return cpf.substr(0, cpf.length - 1);
    }
    else {
        cpf=cpf.replace(/\D/g,"");
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");
        cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2");
        cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    }
    return cpf
}

$(document).ready(function(){
    $window = $(window);
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);
        $(window).scroll(function() {
            var yPos = -($window.scrollTop() / $scroll.data('speed'));
            var coords = '50% '+ yPos + 'px';
            $scroll.css({ backgroundPosition: coords });
        });
    });
});