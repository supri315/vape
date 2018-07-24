<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css">
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  box-sizing: border-box;
}

body {
  font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color: white;
  font-size: 12px;
  background: #272c33;
}

form {
  background: #111;
  width: 400px;
  margin: 30px auto;
  border-radius: 0.4em;
  border: 1px solid #191919;
  overflow: hidden;
  position: relative;
  box-shadow: 0 5px 10px 5px rgba(0, 0, 0, 0.2);
  top : 90px;
}

.inset {
  padding: 20px;
  border-top: 1px solid #19191a;
}

form h1 {
  font-size: 18px;
  text-shadow: 0 1px 0 black;
  text-align: center;
  padding: 15px 0;
  border-bottom: 1px solid black;
  position: relative;
}


input[type=text],
input[type=password] {
  width: 100%;
  padding: 8px 5px;
  border: 1px solid #222;
  box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
  border-radius: 0.3em;
  margin-bottom: 20px;
}

label[for=remember] {
  color: white;
  display: inline-block;
  padding-bottom: 0;
  padding-top: 10px;
}

input[type=checkbox] {
  display: inline-block;
  vertical-align: top;
}

.p-container {
  padding: 0 20px 20px 20px;
}

.p-container:after {
  clear: both;
  display: table;
  content: "";
}


input[type=submit] {
  padding: 5px 20px;
  border: 1px solid rgba(0, 0, 0, 0.4);
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.4);
  border-radius: 0.3em;
  background: #0184ff;
  color: white;
  font-weight: bold;
  cursor: pointer;
  font-size: 13px;
}

input[type=submit]:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), inset 0 -10px 10px rgba(255, 255, 255, 0.1);
}
    </style>
</head>


<body>
<?php echo form_open(base_url('login'));
?>
  <form>
  <h1>BETRIX VAPE</h1>
  <div class="inset">
   <?php
   echo validation_errors ('<div class="alert alert-warning">','</div>');
   if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
             }
             ?>
  <p>
    <label for="username">USERNAME</label>
    <input type="text" name="username" >
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" >
  </p>

  </div>
  <p class="p-container">

    <input type="submit" value="login" >
  </p>
        <?php
echo form_close();
?>
</form>
</body>
</html>
