<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="view/css/ThankYou.css">
    <script type="text/javascript" src="view/Js/PageEvent.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="floating-wpp.css">
    <script type="text/javascript" src="floating-wpp.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            
        }
    </style>
</head>

<body>
<div class="page active">
<p>شكرا...Merci
<br/>
<br/>لقد تم تسجيل طلبكم بنجاح سيتواصل معكم مسؤول المبيعات لتأكيد الطلبية في أقرب وقت ممكن. شكرا
<br/><br/>VOTRE DEMANDE A BIEN ÉTÉ ENREGISTRÉE. NOUS LA TRAITERONS DANS LES PLUS BREFS DÉLAIS.
<br/><br/>من 08:30 الى 17:30
<br/><br/><a href="disfastgroup@gmail.com" style="color: white;">disfastgroup@gmail.com</a>
</p>
<div id="myButton" style="color: black;"></div>
</div>

    
</body>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '+212631686308',
            popupMessage: 'Bonjour Comment pouvons-nous vous aider',
            message: "",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: '<img src="whatsapp.svg" />'
        });
    });
</script>

</html>