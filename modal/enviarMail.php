<div class="modal fade" id="correo"  role="dialog" style="font-size: 12px; margin-top: 20px;">
                                <div class="modal-dialog">
                                  <div class="modal-content" >
                                    <div class="modal-header" style="background: green; color: white;">
                                      <h5 class="modal-title" id="exampleModalLabel" >Enviar correo</h5>
                                     
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <h6>El correo de notificación sera enviado a los usuarios que no han capturado su resultado obtenido 2021.</h6>
                                            <textarea class="form-control" id="notificar" rows="9" placeholder="Redacta el correo de notificación"></textarea>
                                        </div><br>
                                        <input type="submit" value="Enviar correo" class="notificarMail" style="width: 100%; height: 40px; color: white; background: #FCDF3B; border: none; font-size: 17px;" >
                                       <script>

$('.notificarMail').click(function() {
                                
                       // let fired_button = $(this).val();
                        let notificar = $("#notificar").val();
                        
                  let ob = {notificar:notificar};
                        let mensaje = confirm("El correo de notificacón sera enviado a los que aun no capturan datos, deseas continuar?")
                
                if (mensaje == true) {
                     $.ajax({
        type: "POST",
        url: 'mailNotification.php',
        data: ob,
         beforeSend: function(objeto){
                swal({
                    title: '¡Correo Enviando!',
                    text: '',
                    type: 'success',
                    timer: 4000,
                    showConfirmButton: false
                     });
                },
        success: function(resp){
            
           
        }
        
    });
                        //window.location.href = 'mailNotificacion.php?valor'fired_button2;
                        } else {
                    swal({
                    title: '¡CANCELADO!',
                    text: '',
                    type: 'error',
                    timer: 1000,
                    showConfirmButton: false
                     });
                       
                 
                }   
                 });  
</script>   
                                 
                                  </div>
                                </div>
                              </div>
                             </div>