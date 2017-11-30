function checkResult() {
    var userScore = document.getElementById('score1').value;
    var a = document.getElementById('unit1');
    // var totalScore = document.getElementById('unitNum').value;
    var result = a.options[a.selectedIndex].value;
    if (userScore >= 80) {
        var e = 5;
        var num = e * result;
        var answer = num.toFixed(2)
    } else if (userScore >= 60) {
        e = 4;
        num = e * result;
        answer = num.toFixed(2)
    } else if (userScore >= 40) {
        e = 3;
        num = e * result;
        answer = num.toFixed(2)
    } else if (userScore >= 20) {
        e = 2;
        num = e * result;
        answer = num.toFixed(2)
    } else if (userScore >= 1) {
        e = 1;
        num = e * result;
        answer = num.toFixed(2)
    } else {
        alert("Unrecognised score!");
        return false;
    }
    document.getElementById('result1').value = answer;
}
