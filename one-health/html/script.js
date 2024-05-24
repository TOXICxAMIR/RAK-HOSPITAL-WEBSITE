function validate() {
    var marks = document.getElementById("marks").value;

    if (marks >= 70) {
        window.alert('Distinction');
    }
    else if (marks >= 60 && marks <= 69) {
        window.alert('Merit');
    }
    else if (marks >= 40 && marks <= 69) {
        window.alert('Pass');
    }
    else {
        window.alert('Refer');
    }
}