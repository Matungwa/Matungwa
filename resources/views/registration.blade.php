<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-flex aligns-items-center justify-content-center card text-center w-75 position-absolute top-50 start-50 translate-middle" >
            <div class="card">
            <div class="card-body">
                <img src="https://www.wcf.go.tz/site/images/logo.png" alt="wcf logo">
          <h6 class="card-title">NEW EMPLOYEE SYSTEM ACCESS REQUEST FORM</h6>
          <form action="dataInsert" method="POST">
            @csrf
            <input type="text" id="office" placeholder="Office"><br>
            <input type="text" id="idnumb" placeholder="Staff ID number"><br>
            <input type="text" id="sname" placeholder="Surname"><br>
            <input type="text" id="fname" placeholder="First name"><br>
            <input type="text" id="mname" placeholder="Middle name"><br>
            <input type="text" id="desig" placeholder="Designation"><br>
            <input type="text" id="dirunit" placeholder="Directorate/unit"><br>
            <input type="email" id="email" placeholder="Email"><br>
            <input type="date" id="date" placeholder="Date"><br>
            <a href="#" class="btn btn-primary">Register</a>
          </form>
            </div>
            </div>
        </div>
    </div>
    <style>
        body{
           background-color: #e2f1f6

        }
        div.card{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            text-align: center;
            background: rgba(255,255,255,.2);

        }
        input[type=text] {
            width: 60%;
            padding: 10px 18px;
            margin: 8px 0;
            background-color: #d4eff7;
            border-bottom:solid rgb(39, 64, 75);
            border-top: none;
            border-left: none;
            border-right: none;
        }
        input[type=email] {
            width: 60%;
            padding: 10px 18px;
            margin: 8px 0;
            background-color: #d4eff7;
            border-bottom:solid rgb(39, 64, 75);
            border-top: none;
            border-left: none;
            border-right: none;
        }
        input[type=date] {
            width: 60%;
            padding: 10px 18px;
            margin: 8px 0;
            background-color: #d4eff7;
            border-bottom:solid rgb(39, 64, 75);
            border-top: none;
            border-left: none;
            border-right: none;
        }
        .card-title{
                color: rgb(3, 47, 61);}

     div.btn btn-primary {
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;}
                </style>
</body>
</html>
