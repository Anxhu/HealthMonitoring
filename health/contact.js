function printError(id, msg) {
    document.getElementById(id).innerHTML = msg;
}

function validateForm() {
    var name = document.form.name.value;
    var email = document.form.email.value;
    var mobile = document.form.mobile.value;
    var hospitalname = document.form.hospitalname.value;
    var gender = document.form.gender.value;
    var nerror = eerror = merror = herror = derror = true;
    if (name == "") {
        printError("nerror", "please enter your name")
        var elem = document.getElementById("name");

        elem.classList.add("input-2");
        elem.classList.remove("input-1");

    } else {
        var regex = /^[a-zA-z\s]+$/;
        if (regex.test(name) === false) {
            printError("nerror", "please enter a valid name");
            var elem = document.getElementById("name");

            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        } else {
            printError("nerror", "");
            nerror = false;
            var elem = document.getElementById("name");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        }
    }



    if (email == "") {
        printError("eerror", "please enter your email")
        var elem = document.getElementById("email");

        elem.classList.add("input-2");
        elem.classList.remove("input-1");

    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("eerror", "please enter a valid email id");
            var elem = document.getElementById("email");

            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        } else {
            printError("eerror", "");
            eerror = false;
            var elem = document.getElementById("email");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        }
    }

    if (mobile == "") {
        printError("merror", "please enter your mobile number")
        var elem = document.getElementById("mobile");

        elem.classList.add("input-2");
        elem.classList.remove("input-1");

    } else {
        var regex = /^[0-9]\d{9}$/;
        if (regex.test(mobile) === false) {
            printError("merror", "please enter a valid number");
            var elem = document.getElementById("mobile");

            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        } else {
            printError("merror", "");
            nerror = false;
            var elem = document.getElementById("mobile");
            elem.classList.add("input-2");
            elem.classList.remove("input-1");

        }
    }

    if (hospitalname == "Select") {
        printError("herror", "please select a option")
        var elem = document.getElementById("hospitalname");

        elem.classList.add("input-4");
        elem.classList.remove("input-3");

    } else {
        printError("herror", "")
        herror = false;
        var elem = document.getElementById("hospitalname");

        elem.classList.add("input-3");
        elem.classList.remove("input-4");


    }

    if (gender == "Select") {
        printError("derror", "please select your gender!!")
        var elem = document.getElementById("gender");

        elem.classList.add("input-4");
        elem.classList.remove("input-3");

    } else {
        printError("derror", "")
        derror = false;
        var elem = document.getElementById("gender");

        elem.classList.add("input-3");
        elem.classList.remove("input-4");


    }
    if ((nerror || eerror || herror || merror || derror) == true) {
        return false;
    }


}