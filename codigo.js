$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
    
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o contraseña',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o contraseña incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡BIENVENIDO AL SISTEMA!',
                       confirmButtonColor:'#03c04A',
                       confirmButtonText:'Acceder'
                   }).then((result) => {
                       if(result.value){
                           window.location.href = "panel/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});