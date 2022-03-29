<html>
<head>
    <title>Meu primeiro site versão 2</title>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style> 
    body {
        font-weight: bold;
        color: green;
        padding-left: 10px;
        line-height: 50px;
    }
</style>
    </head>

<body>

    <?php
        for ($i = 0 ; $i < 10 ; $i++)  {
            print ("Linha número " . $i . "<br />");
        }
    ?>
    
</body>

    <script type="text/javascript">
        $(document).ready(function() {
            alert("Wooho");
        });
    </script>

</html>