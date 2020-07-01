<html>

<head>
    <title>Painel - <?php echo $viewData['company_name']; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/style.css">
</head>

<body>
    <h1>Este é o topo</h1>
    <hr>

    <?php $this->loadViewIntemplate($viewName, $viewData); ?>
</body>

</html>