<html>
<head>
    <style>
        .form_show{
            position: relative;
            margin-left: 34%;
        }
        .form_show{
            border: 1px solid black;
            width: 26%;
            border-radius: 10px;
            display:inline-grid;
            padding-left: 45px;
        }
        .t_type{
            width:10rem;
        }
        p.form_heading {
            font-size: 30px;
            left: 51px;
            position: relative;
        }
        .form-group{
            padding: 10 0 10 66px;
            display: table-caption;
        }
        .submit_btn{
            width: 40%;
            left: 80px;
            position: relative;
            color: red;
            background-color: black;
        }
        p.success_message {
            color: green;
            font-size: 20px;
        }
        .trans_show {
            margin-left: 26rem;
            display: flow-root;
            border: 1px solid black;
            width: 23rem;
        }
        .trans_show tr{
            display: table-row;
        }
        td {
            position: relative;
        }
        table, th, td {
             border: 1px solid;
        }
    </style>
    <span>Appwrk Test</span>
</head>
<body>
<div class="container">
@yield('content')
</div>
</body>
</html>