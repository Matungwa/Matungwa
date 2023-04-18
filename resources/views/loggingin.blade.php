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
        <img src="https://portal.wcf.go.tz/public/template/frontend/assets/landing/images/en_banner.png" class="card-img" alt="Stony Beach"/>
        <div class="d-flex aligns-items-center justify-content-center card text-center w-75 position-absolute top-50 start-50 translate-middle" >
<!--https://portal.wcf.go.tz/public/template/frontend/assets/landing/images/en_banner.png-->
            <div class="card">
            <div class="card-body">
                <form action="dataInsert" method="POST">
                    @csrf
          <h5 class="card-title">WCF LOGIN PORTAL</h5>
          <div class="card-title"><h3>Hello!</h3><br><p>Get ready to log in</p></div>
          <input type="text" id="idnumb" placeholder="Staff ID number" ><br>
          <input type="email" id="email" placeholder="Email"><br>
          <input type="password" id="pword" placeholder="Password"><br>
          <a href="#" class="btn btn-primary">login</a>
                </form>
        </div>
      </div>
    </div>
                </div>
                <style>
                    div.card{
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                        text-align: center;

                    }
                    input[type=text] {
                        width: 60%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        background-color: #d4eff7;
                        border-bottom:solid rgb(39, 64, 75);
                        border-top: none;
                        border-left: none;
                        border-right: none;
                    }
                    input[type=email] {
                        width: 60%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        background-color: #d4eff7;
                        border-bottom:solid rgb(39, 64, 75);
                        border-top: none;
                        border-left: none;
                        border-right: none;
                    }
                    input[type=password] {
                        width: 60%;
                        padding: 12px 20px;
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
