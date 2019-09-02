<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php
        if (!empty($this->Dados['seo'][0])) {
            extract($this->Dados['seo'][0]);
            
            echo "<title>$titulo</title>";
            echo "<meta name='robots' content='$tipo_rob'>";
            echo "<meta name='description' content='$description'>";
            echo "<meta name='author' content='$author'>";
            echo "<link rel='canonical' href='" . URL . "$endereco'>";
            echo "<meta name='keywords' content='$keywords'>";

            echo "<meta property='og:site_name' content='$og_site_name'>";
            echo "<meta property='og:locale' content='$og_locale'>";
            //https://pt.piliapp.com/facebook/id/
            echo "<meta property='fb:admins' content='$fb_admins'>";
            echo "<meta property='og:url' content='" . URL . "$endereco'>";
            echo "<meta property='og:title' content='$titulo>";
            echo "<meta property='og:description' content='$description'>";
            echo "<meta property='og:image' content='".URL."assets/imagens/pagina/$id/$imagem'>";
        }
        ?>
        <link rel="icon" href="<?php echo URL; ?>assets/imagens/icone/favicon.ico">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>assets/css/personalizado.css">
    </head>
    <body>

