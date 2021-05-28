function fixValue() {
    let day_input = document.getElementById("day");
    if (day_input.value < 01) {
        day_input.value = 01;
    } else if (day_input.value > 31) {
        day_input.value = 31;
    }
}