// Use insert() function to insert the number in textview.
function insert(num) {
    document.getElementById('output').value = document.getElementById('output').value + num;
}

// Use equal() function to return the result based on passed values.
function equal() {
    var exp = document.getElementById('output').value;
    if (exp) {
        document.getElementById('output').value = eval(exp);
    }
}

/* Here, we create a backspace() function to remove the number at the end of the numeric series in textview. */
function cls() {
    document.getElementById('output').value = '';
    //var exp = document.getElementById('output').value;
    //document.getElementById('output').value = exp.substring(0, exp.length - 1); /* remove the element from total length ? 1 */
}
