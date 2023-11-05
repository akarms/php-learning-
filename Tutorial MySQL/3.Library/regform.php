<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div.one{
            border: 1px solid black;
            margin: auto;
            width: 500px;
        }
        div.two{
            padding: 10px;
        }
        h1{
            text-align: center;
        }

    </style>
</head>
<body>
    <div class = "one">
        <div class="two">
            <form action="insertdata.php" method="post">
                <h1>Insert Book Details</h1>
                <table align="center" width = "450px">
                    <tr>
                        <th>
                            AUTHOR
                        </th>
                        <td>
                            <input type="text" name = "AUTHOR">
                        </td>
                    </tr>
                    <tr>
                        <th>
                             BOOK NAME
                        </th>
                        <td>
                            <input type="text" name = "BOOK_NAME">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            ISBN NO
                        </th>
                        <td>
                            <input type="text" name = "ISBN_NO">
                        </td>
                    </tr>  
                    <tr>
                        <td>
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <label for="Submit">
                                <input type="submit" value="Submit">
                            </label>
                            <label for="Reset">
                                <input type="reset" value="Reset">
                            </label>
                        </td>
                    </tr>                                      

                </table>
            </form>


        </div>
    </div>
    
</body>
</html>