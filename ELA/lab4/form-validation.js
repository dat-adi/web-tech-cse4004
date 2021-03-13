function validateForm(Form){
    
    let name = Form.name;
    let collegeName = Form.collegeName;
    let email = Form.email;
    let mobile = Form.mobile;

    var nameFormat = /^[a-zA-Z ]+$/;
    if(name.value.match(nameFormat)){
        alert("Valid Name.");
    } else {
        alert("Not a Valid Name.");
    }

    var collegeNameFormat = /^[a-zA-Z ]+$/;
    if(collegeName.value.match(collegeNameFormat)){
        alert("Valid College Name.");
    } else {
        alert("Not a Valid College Name.");
    }

    var mailFormat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(email.value.match(mailFormat)) {
        alert("Valid email address!");
    } else {
        alert("Not a Valid Email Address!");
    }

    var mobileFormat = /^\d{10}$/;
    if(mobile.value.match(mobileFormat)) {
        alert("Valid Phone Number!");
    } else {
        alert("Not a Valid Phone Number");
    }
}
