<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{text-align: center;
           background-color: palevioletred;
           font-weight: bold;}
        h4{
            text-decoration-line: underline;
        }
        tr{
            text-align: center;
                    
        }
        div.one{
            border: 1px solid black;
            width: 500px;
            margin: auto;

        }
        div.two{
            padding: 5px;
        }


    </style>
</head>
<body>
    <div class="one">
        <div class ="two" >

        
       <h3>Job seeker Registration Form </h3>
       <h4>Registration Details</h4>
       <form action="insertdata.php" method="post">
           <table align="center" width = "450">
                <tr>
                    <td>Title</td>
                    <td><select name = "title" >
                        <Option selected = "selected">Selected Title</Option>
                        <option value = "Mr.">Mr.</option>
                        <option value = "Mrs.">Ms.</option>
                        <option value="Dr.">Dr.</option>
                        <option value="prof.">Prof.</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name ="name"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><label>
                        <input type="radio" name="gender" value="female">
                        Female
                        </label>
                        <br>
                        <label>
                            <input type="radio" name = "gender" value="male">
                            Male
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>
                        <label>
                            <input type="date" name = "bday" value="yyyy-mm-dd" size = 10>
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
                        <div align = "right" >
                        <input type="submit" name="Submit" value = "register">
                        <input type="reset" name="reset" value = "reset">                  
                        </div>
                     </td> 
                </tr>
           </table>
       </form>

      </div>
    </div>
</body>
</html>