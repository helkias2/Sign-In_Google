<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="359087225529-ipv57nap4kmvfmm6tl2nqfj9otr104bh.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <a href="#" onClick="signOut();" style="position: relative; float: right;"> Deslogar </a>

    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
          var profile = googleUser.getBasicProfile();

          document.getElementById('log').style.display = 'block';
          document.getElementById('email').innerHTML = profile.getEmail();
          document.getElementById('nome').innerHTML = profile.getName();
          document.getElementById('id').innerHTML = profile.getId();
          document.getElementById('imagem').src = profile.getImageUrl();

          var id_token = googleUser.getAuthResponse().id_token;
            document.getElementById('token').innerHTML = id_token;
      }

      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
          document.getElementById('log').style.display = 'none';
        });
      }
    </script>

    <style>
        #lod {
          display: 'none';
        }
        
      </style>
      <div id="log">
        <p id="nome">Nome Completo: </p>
        <p id="email">E-mail: </p>
        <img id="imagem" src="">Imagem Perfil: </p>
        <p id="id">ID Google: </p>
        <p id="token">Token Google: </p>
      </div>
    
  </body>
</html>