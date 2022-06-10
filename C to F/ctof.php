<!DOCTYPE html>
<html lang="en">
<head>
    <title>°C to F</title>
</head>
<body>
    <form method="GET" action ="c.php">
        <table align="center" border="1">
            <tr>
                <td>Enter °C : </td>
                <td><input type="text" name="c"></td>
            </tr>
            <tr>
                <td align="center" colspan="2" >
                    <input type="submit" name="convartc" value="Convart">
                </td>
            </tr>
        </table>
    </form>

    <br><br><hr><br><br>

    <form method="$_GET" action="f.php">
        <table align="center" border="1">
            <tr>
                <td>Enter F :</td>
                <td>
                    <input type="text" name="f">
                </td>
            </tr>
            <tr>
            <td align="center" colspan="2" >
                    <input type="submit" name="convartf" value="Convart">
                </td>
            </tr>

        </table>
    </form>
</body>
</html>