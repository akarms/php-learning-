<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Registration Form</title>
    <style>
        div.one {
            border: 1px solid black;
            width: 500px;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 20px;
        }

        h3 {
            text-align: center;
            background-color: palevioletred;
            font-weight: bold;
            padding: 10px;
        }

        h4 {
            text-decoration-line: underline;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="reset"] {
            background-color: #f44336;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="one">
        <h3>Job Seeker Registration Form</h3>
        <h4>Registration Details</h4>
        <form action="insertdata.php" method="post">
            <table align="center" width="450">
                <tr>
                    <td>Title</td>
                    <td>
                        <select name="title">
                            <option selected="selected">Selected Title</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Ms.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="prof.">Prof.</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <label>
                            <input type="radio" name="gender" value="female"> Female
                        </label>
                        <label>
                            <input type="radio" name="gender" value="male"> Male
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <label>
                            <input type="date" name="bday" value="yyyy-mm-dd" size="10">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div align="right">
                            <input type="submit" name="Submit" value="Register">
                            <input type="reset" name="reset" value="Reset">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
