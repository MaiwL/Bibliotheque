<?php ob_start() ?>

<h1 class="d-flex justify-content-center " style="font-size: 80px; margin-top:90px; margin-bottom: 20px; color: #CF756C; font-family: 'Playfair Display', serif;">Ajout d'une catégories</h1>
  <script>
    function onSubmit() {
      alert("Le formulaire a été soumis !");
    }
  </script>
</head>
<body>
  <form id="myForm" action="test.php" method="post">
    <input type="text" name="nom"  placeholder="Entrez votre nom" required>
    <br>
    <img src="./Images/Compte.png" alt="Image de soumission" onclick="submitForm()">
  </form>

  <script>
    function submitForm() {
      document.getElementById("myForm").submit();
    }

    document.getElementById("myForm").addEventListener("submit", function() {
      onSubmit();
    });
  </script>
<?php
$content = ob_get_clean();
require "template.php";
?>