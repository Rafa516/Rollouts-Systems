<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperação de senha</title>

</head>

<body bgcolor="#E0F2F7">

  <table class="body-wrap w320">
    <tr>
      <td></td>
      <td class="container">
        <div class="content">
          <table cellspacing="0">
            <tr>
              <td>
                <table class="soapbox">
                  <tr>
                    <td class="soapbox-title">
                      <h3>Recuperação de Senha no Sistema Rollouts Systems</h3>
                    </td>
                  </tr>

                </table>
                <table class="body">
                  <tr>
                    <td class="body-padding"></td>
                    <td class="body-padded">
                      <div class="body-title"> Olá <b><?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?><b>,</div>
                      <table class="body-text">
                        <tr>
                          <td class="body-text-cell">
                            Para redefinir a sua senha acesse o link <a href="<?php echo htmlspecialchars( $link, ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $link, ENT_COMPAT, 'UTF-8', FALSE ); ?></a>.
                          </td>
                        </tr>
                      </table>
                      <div>
                        <!--[if mso]>
                          <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="#" style="height:38px;v-text-anchor:middle;width:230px;" arcsize="11%" strokecolor="#407429" fill="t">
                            <v:fill type="tile" src="https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7" color="#41CC00" />
                            <w:anchorlock/>
                            <center style="color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;">Review Account Settings</center>
                          </v:roundrect>
                        <![endif]--><br>
                        <center><a href="<?php echo htmlspecialchars( $link, ENT_COMPAT, 'UTF-8', FALSE ); ?>"
                            style="background-color:#41CC00;background-image:url(https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7);border:1px solid #407429;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:bold;text-shadow: -1px -1px #47A54B;line-height:38px;text-align:center;text-decoration:none;width:230px;-webkit-text-size-adjust:none;mso-hide:all;">Redefinir
                            Senha</a>
                      </div>
                      <center>

        </div>

</body>

</html>