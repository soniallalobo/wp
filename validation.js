function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Student Id must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["fname2"].value;
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
    var z = document.forms["myForm"]["fname3"].value;
    if (z == "") {
        alert("Email Id must be filled out");
        return false;
    }
    var w = document.forms["myForm"]["fname4"].value;
    if (w == "") {
        alert("Branch must be filled out");
        return false;
    }
}