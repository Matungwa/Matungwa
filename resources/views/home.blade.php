<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>laravel project</title>
</head>
<body>

    <h6>ICT FORM NO.1a</h6>
    <h3 text-align:center;>BOARD OF TRUSTEES</h3>
    <img src="https://www.wcf.go.tz/site/images/logo.png" alt="wcf logo">
    <h4>WORKERS COMPENSATION FUND</h4>
    <h5>NEW EMPLOYEE SYSTEM ACCESS REQUEST FORM</h5>
    <p>ALL fields must be completed in CAPITAL LETTERS clearly before submitting this form. If access to MAC or other systems is required, submit this form together with ICT form No 1b and Confidentiality Agreement (ICT Form No 3). Call us on +255 22 292 6107-8 or extension 111 for assistance.</p>
    <form action="dataInsert" method="POST">
        @csrf
        <label>Office:</label>
        <input type="text" id="office"><br>
        <label>Staff ID Number:</label>
        <input type="text" id="idnumb">
        <label>Surname:</label>
        <input type="text" id="sname"><br>
        <label>First Name</label>
        <input type="text" id="fname">
        <label>Middle Name:</label>
        <input type="text" id="mname"><br>
        <label>Designation:</label>
        <input type="text" id="desig">
        <label>Directorate/Unit:</label>
        <input type="text" id="dirunit"><br>
        <p>Access to the following systems must be provided to every new employee</p>
        <label>Email:</label>
        <input type="email" id="email"><br>

        <label>Employee Signature:</label>
        <input type="text" id="sign">
        <label>Date:</label>
        <input type="date" id="date"><br>

        <p><b><u>Director/head of Unit</u></b></p><br>
        <label>Reason:</label>
        <input type="text" id="reason"><br>
        <label>Name:</label>
        <input type="text" id="name">
        <label>Signature:</label>
        <input type="text" id="sign">
        <label>Date:</label>
        <input type="date" id="date"><br>

        <p><b><u>Head of Human Resources</u></b></p><br>
        <label>Reason:</label>
        <input type="text" id="reason"><br>
        <label>Access Start Date:</label>
        <input type="date" id="date">
        <label>Access End Date:</label>
        <input type="date" id="date"><br>
        <label>Name:</label>
        <input type="text" id="name">
        <label>Signature:</label>
        <input type="text" id="sign">
        <label>Date:</label>
        <input type="date" id="date"><br>

        <p><b>ICT Unit</b></p>
        <p><b><u>Approval (Head of ICT)</u></b></p><br>
        <label>Name:</label>
        <input type="text" id="name">
        <label>Signature:</label>
        <input type="text" id="sign">
        <label>Date:</label>
        <input type="date" id="date"><br>

        <p><b><u>System Administrator confirmation</u></b></p><br>
        <label>Name:</label>
        <input type="text" id="name">
        <label>Signature:</label>
        <input type="text" id="sign">
        <label>Date:</label>
        <input type="date" id="date"><br>
        <button type="button"> SUBMIT </button>
    </form>

</body>
</html>

