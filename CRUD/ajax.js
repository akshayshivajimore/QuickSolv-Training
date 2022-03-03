// ajax insert

$("#btn").click(function(e) {
    e.preventDefault();
    let nm = $("#name").val();
    let em = $("#email").val();
    let ph = $("#phone").val();
    let ad = $("#address").val();
    let ct = $("#city").val();
    let pc = $("#pincode").val();

    mydata = { name: nm, email: em, phone: ph, address: ad, city: ct, pincode: pc }
    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        sucess: function(data) {
            msg = "<div>" + data + "</div>";
            $('#msg').html(msg);
            $("#myform")[0].reset();
        },
    });
});