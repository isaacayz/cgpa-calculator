<?php include ("header.html"); ?>
<div class="row backImg">
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>MATRIC / SCORE</th>
                <th>DEPT / UNIT</th>
                <th>TOTAL UNIT NUMBER</th>
            </tr>
            <tr>
                <td><input type="text" name="inputMatric" size="30" placeholder="Matriculation Number"></td>
                <td><select>
                        <option selected value="null">Department</option>
                        <option value="cs">Computer Science</option>
                        <option value="mc">Mass Communication</option>
                        <option value="md">Medicine</option>
                    </select>
                </td>
                <td><input type="number" size="30" id="unitNum"> </td>
            </tr>
            <tr>
                <td><input type="number" name="score1" size="30" id="score1" placeholder="Enter your score"></td>
                <td><select id="unit1" onchange="checkResult1();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result1" size="30" id="result1" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score2" size="30" id="score2" placeholder="Enter your score"></td>
                <td><select id="unit2" onchange="checkResult2();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result2" size="30" id="result2" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score3" size="30" id="score3" placeholder="Enter your score"></td>
                <td><select id="unit3" onchange="checkResult3();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </>
                <td><input type="number" name="result3" size="30" id="result3" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score4" size="30" id="score4" placeholder="Enter your score"></td>
                <td><select id="unit4" onchange="checkResult4();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result4" size="30" id="result4" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score5" size="30" id="score5" placeholder="Enter your score"></td>
                <td><select id="unit5" onchange="checkResult5();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result5" size="30" id="result5" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score6" size="30" id="score6" placeholder="Enter your score"></td>
                <td><select id="unit6" onchange="checkResult6();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result6" size="30" id="result6" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score7" size="30" id="score7" placeholder="Enter your score"></td>
                <td><select id="unit7" onchange="checkResult7();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result7" size="30" id="result7" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score8" id="score8" size="30" placeholder="Enter your score"></td>
                <td><select id="unit8" onchange="checkResult8();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result8" id="result8" size="30" disabled></td>
            </tr>
            <tr>
                <td><input type="number" name="score9" size="30" id="score9" placeholder="Enter your score"></td>
                <td><select id="unit9" onchange="checkResult9(); computation(); compute2();">
                        <option selected value="null">Unit</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td><input type="number" name="result9" size="30" id="result9" disabled></td>
            </tr>
            <tr>
                <th class="fa fa-calculator"> COMPUTATION</th>
                <th><input type="number" name="unitComp" size="30" id="unitComp" disabled </th>
                <th><input type="number" name="resultComp" size="30" id="resultComp" disabled></th>
            </tr>
        </table>

<script type="text/javascript">
            function checkResult1() {
                var userScore = document.getElementById('score1').value;
                var a = document.getElementById('unit1');
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
            function checkResult2() {
                var userScore = document.getElementById('score2').value;
                var a = document.getElementById('unit2');
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
                document.getElementById('result2').value = answer;
            }
            function checkResult3() {
                var userScore = document.getElementById('score3').value;
                var a = document.getElementById('unit3');
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
                document.getElementById('result3').value = answer;
            }
            function checkResult4() {
                var userScore = document.getElementById('score4').value;
                var a = document.getElementById('unit4');
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
                document.getElementById('result4').value = answer;
            }
            function checkResult5() {
                var userScore = document.getElementById('score5').value;
                var a = document.getElementById('unit5');
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
                document.getElementById('result5').value = answer;
            }
            function checkResult6() {
                var userScore = document.getElementById('score6').value;
                var a = document.getElementById('unit6');
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
                document.getElementById('result6').value = answer;
            }
            function checkResult7() {
                var userScore = document.getElementById('score7').value;
                var a = document.getElementById('unit7');
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
                document.getElementById('result7').value = answer;
            }
            function checkResult8() {
                var userScore = document.getElementById('score8').value;
                var a = document.getElementById('unit8');
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
                document.getElementById('result8').value = answer;
            }
            function checkResult9() {
                var userScore = document.getElementById('score9').value;
                var a = document.getElementById('unit9');
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
                document.getElementById('result9').value = answer;
            }
            function computation() {
                var a1 = document.getElementById('unit1');
                var result1 = Number(a1.options[a1.selectedIndex].value);
                var a2 = document.getElementById('unit2');
                var result2 = Number(a2.options[a2.selectedIndex].value);
                var a3 = document.getElementById('unit3');
                var result3 = Number(a3.options[a3.selectedIndex].value);
                var a4 = document.getElementById('unit4');
                var result4 = Number(a4.options[a4.selectedIndex].value);
                var a5 = document.getElementById('unit5');
                var result5 = Number(a5.options[a5.selectedIndex].value);
                var a6 = document.getElementById('unit6');
                var result6 = Number(a6.options[a6.selectedIndex].value);
                var a7 = document.getElementById('unit7');
                var result7 = Number(a7.options[a7.selectedIndex].value);
                var a8 = document.getElementById('unit8');
                var result8 = Number(a8.options[a8.selectedIndex].value);
                var a9 = document.getElementById('unit9');
                var result9 = Number(a9.options[a9.selectedIndex].value);
                document.getElementById('unitComp').value = result1+result2+result3+result4+result5+result6+result7+result8+result9;
            }
            function compute2() {
                var a1 = Number(document.getElementById('result1').value);
                var a2 = Number(document.getElementById('result2').value);
                var a3 = Number(document.getElementById('result3').value);
                var a4 = Number(document.getElementById('result4').value);
                var a5 = Number(document.getElementById('result5').value);
                var a6 = Number(document.getElementById('result6').value);
                var a7 = Number(document.getElementById('result7').value);
                var a8 = Number(document.getElementById('result8').value);
                var a9 = Number(document.getElementById('result9').value);
                document.getElementById('resultComp').value = a1+a2+a3+a4+a5+a6+a7+a8+a9;
            }
            </script>

<?php include ("footer.html");?>