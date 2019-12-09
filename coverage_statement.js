/* The actual print function */
var VBS = false;

function prePrint() {
    if (window.print) window.print();
    else alert('This script does not work in your browser');
}

// function printAlert() {
//     alert('Please print or save this coverage statement for your records. Please call 888-450-2808 if you have any questions.');
// }

$(document).ready(function () {


    $("#printPlan").click(function () {
        prePrint();


    });

    $("#printFinish").click(function () {

        finish();

    });
    printAlert();

});
