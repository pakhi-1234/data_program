<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sum</title>
</head>

<body>
    <div>
        <table>
            <tr>
                <td >Enter first no.:</td>
                <td><input type="text" id="f_num"></td>
            </tr>
            <tr>
                <td>Enter second no.:</td>
                <td><input type="text" id="s_num"></td>
            </tr>
            <tr>
                <td>Enter third no.:</td>
                <td><input type="text" id="t_num"></td>
            </tr>
            <tr>
                <td><button onclick="datasum()">Sum</button></td>
            </tr>
        </table>
    </div>
    <script>
        function datasum(){
            var first_number=document.getElementById("f_num").value;
            var second_number=document.getElementById("s_num").value;
            var third_number=document.getElementById("t_num").value;
            if(first_number==''){
                alert("Enter first no.")
            }
            else if(second_number==''){
                alert("Enter second no.")
            }
            else if(third_number==''){
                alert("Enter third no.")
            }
            else{
                document.location="sum.php?one="+first_number+"&two="+second_number+"&three="+third_number;
            }
        }
    </script>
</body>

</html>