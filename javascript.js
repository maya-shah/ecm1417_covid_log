function CheckLength(password) {

    var password = document.getElementById(password).value;

    if (password.length < 8)

        alert('The password must be greater than 8 characters.');


    function myDeleteFunction() {
        document.getElementById("myTable").deleteRow(0);
    }

}