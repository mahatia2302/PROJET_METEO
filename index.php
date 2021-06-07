<html>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- JVSCRIPT -->
        <script src="jquery.js"></script>
        <script language="javascript">

            // quand tous les element HTML sont executer
            // executer la function 
            $(document).ready(function(){
                
                $('#button').click(function(){
                    reponse = prompt('Merci de renseigner votre prénom');
                    getPrenom(reponse);
                })

                $('#btn_delete').click(function(){
                    $('#affiche').empty();
                })

            })

            function getPrenom(reponse){
                
                $.ajax({
                    type: 'post',
                    url: 'ajax.php',
                    data: {
                        'reponse': reponse
                    },
                    datatype: 'json',
                    success: function(data) {
                        $('#affiche').append(data);
                    }
                });

            }
           
        </script>

    </head>

    <body>
        
        <div id="affiche">
        
        </div>

        <button id="button">
            executer
        </button>

            <br>

        <button id="btn_delete">
            supprimer
        </button>

    </body>

</html>