<style>
  body {
    background-color: paleturquoise;

  }

  .login {
    width: 300px;
    height: 285px;
    overflow: hidden;
    background: #1e1e1e;
    border-radius: 6px;
    margin: 50px auto;
    box-shadow: 0px 0px 50px rgba(0, 0, 0, .8);
  }

  .login .titulo {
    width: 298px;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: #121212;
    border: #2d2d2d solid 1px;
    margin-bottom: 30px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    font-family: Arial;
  }

  .login form {
    width: 240px;
    height: auto;
    overflow: hidden;
    margin-left: auto;
    margin-right: auto;
  }

  .login form input[type=text],
  .login form input[type=password] {
    width: 200px;
    font-size: 12px;
    padding-top: 14px;
    padding-bottom: 14px;
    padding-left: 40px;
    border: none;
    color: #bfbfbf;
    background: #141414;
    outline: none;
    margin: 0;
  }

  .login form input[type=text] {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    border-top: #0b0b0b solid 1px;
    background: #141414 url(http://dev.dhenriquez.com/test-img/icons/111-user.png) 10px center no-repeat;
  }

  .login form input[type=password] {
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
    border-top: #0b0b0b 1px solid;
    border-bottom: #353535 1px solid;
    background: #141414 url(http://dev.dhenriquez.com/test-img/icons/54-lock.png) 10px center no-repeat;
  }

  .login form .enviar {
    width: 240px;
    height: 12px;
    display: block;
    padding-top: 14px;
    padding-bottom: 14px;
    border-radius: 6px;
    border: none;
    border-top: #4eb2a8 1px solid;
    border-bottom: #161616 1px solid;
    background: #349e92;
    text-align: center;
    text-decoration: none;
    font-size: 12px;
    font-weight: bold;
    color: #FFF;
    text-shadow: 0 -1px #1d7464, 0 1px #7bb8b3;
    font-family: Arial;
  }

  .login .olvido {
    width: 240px;
    height: auto;
    overflow: hidden;
    padding-top: 25px;
    padding-bottom: 25px;
    font-size: 10px;
    text-align: center;
  }

  .login .olvido .col {
    width: 50%;
    height: auto;
    float: left;
  }

  .login .olvido .col a {
    color: #fff;
    text-decoration: none;
    font: 12px Arial;
  }



  html,
  body,
  div,
  span,
  applet,
  object,
  iframe,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  blockquote,
  pre,
  a,
  abbr,
  acronym,
  address,
  big,
  cite,
  code,
  del,
  dfn,
  em,
  img,
  ins,
  kbd,
  q,
  s,
  samp,
  small,
  strike,
  strong,
  sub,
  sup,
  tt,
  var,
  b,
  u,
  i,
  center,
  dl,
  dt,
  dd,
  ol,
  ul,
  li,
  fieldset,
  form,
  label,
  legend,
  table,
  caption,
  tbody,
  tfoot,
  thead,
  tr,
  th,
  td,
  article,
  aside,
  canvas,
  details,
  embed,
  figure,
  figcaption,
  footer,
  header,
  hgroup,
  menu,
  nav,
  output,
  ruby,
  section,
  summary,
  time,
  mark,
  audio,
  video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }

  /* HTML5 display-role reset for older browsers */

  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  menu,
  nav,
  section {
    display: block
  }

  body {
    line-height: 1
  }

  ol,
  ul {
    list-style: none
  }

  blockquote,
  q {
    quotes: none
  }

  blockquote:before,
  blockquote:after,
  q:before,
  q:after {
    content: '';
    content: none;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-offset-4">
      <div class="panel panel-">
        <div class="panel-body">
          <?php
          //notifikasi error
          echo validation_errors('<div class="alert alret-warning">', '</div>');

          //nofitfikasi

          if ($this->session->flashdata('warning')) {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('warning');
            echo '</div>';
          }

          if ($this->session->flashdata('sukses')) {
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('sukses');
            echo '</div>';
          }
          echo form_open(base_url('login'), 'class="form-horizontal" entype="multipart/formdata"');
          ?>
          <section class="login">
            <div class="titulo">Welcome Adminstator</div>
            <form action="#" method="post" enctype="multipart/formdata">
              <input type=" text" name="username" required title="Username required" placeholder="Username" data-icon="U">
              <br>
              <hr>
              <input type="password" name="password" required title="Password required" placeholder="Password" data-icon="x">
              <br>
              <hr>
              <button type="submit" class="btn btn-primary center-block" placeholder="Password">Login</button>
            </form>

            <?php echo form_close(); ?>
          </section>