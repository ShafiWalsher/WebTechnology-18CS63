function calc(clicked_id) {
    var v1 = parseFloat(document.getElementById("value1").value);
    var v2 = parseFloat(document.getElementById("value2").value);
    if (isNaN(v1) || isNaN(v2)) alert("Please enter a valid number");
    else if (clicked_id == "add")
      document.getElementById("answer").value = v1 + v2;
    else if (clicked_id == "sub")
      document.getElementById("answer").value = v1 - v2;
    else if (clicked_id == "mul")
      document.getElementById("answer").value = v1 * v2;
    else if (clicked_id == "div") {
      if (v2 == 0) {
        alert("Please Enter a Non Zero Denominator");
        location.reload();
      }
      else;
      document.getElementById("answer").value = v1 / v2;
    }
  }
  function cls() {
    value1.value = "0";
    value2.value = "0";
    answer.value = "";
  }