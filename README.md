# bbdd_ajax
## consulta mezcla de dos tablas ##
$sql = "SELECT NUMEROVENTA, NUMEROPRODUCTO, NOMBREPRODUCTO, UNIDADESVENDIDAS, PRECIO FROM PRODUCTOS P INNER JOIN DETALLE D ON P.NUMEROPRODUCTO = D.NUMPRODUCTO";
# ajax con serialize #
<script>
        $("#enviar").click(function(){
            $.ajax({
                url: "includes/datos.php",
                type: "post",
                data: $("#form").serialize(),
                success: function(resultado){
                        $("#resultado").append(resultado)
                        let pos = $(".pos").eq(length-1).text()
                        let jugada = $(".jugada").eq(length-1).text()
                        let intento = jugada.split(" ")
                        //let i = pos.split("")
                        //let p = i[i.length-1]
                        if (pos == 4) {
                            //$("#form").css("visibility", "hidden")
                            $("#form").remove()
                            $("#formulario").find("p").remove()
                            $("#formulario").append("<h2>HAS ACERTADO</h2><h5>Intentos: " + intento[1] + "</h5></div><i class='bi bi-trophy-fill'></i>")
                        }
                    }
            })
        })
    </script>
    # otro ajax #
    <script>
        $.ajax({
            url: "datos.php",
            type: "post",
            success: function(resultado) {
                $("#mostrarDatos").html(resultado)
            }
        })
    </script>
