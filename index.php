<?php
$formularyJSON = file_get_contents('formulary.json');
$formulary = json_decode($formularyJSON, true);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="src/css/reset.css" />
  <link rel="stylesheet" href="src/css/utils.css" />
  <link rel="stylesheet" href="src/css/style.css" />
  <link rel="stylesheet" href="src/css/accessibility.css" />
  <link rel="stylesheet" href="src/css/contrast.css" />

  <title>APR DIGITAL - Gerenciamento de Risco Crítico</title>
</head>

<body>
  <div class="accessibility">
    <button class="accessibility-button" id="accessibility-button">
      <img src="src/assets/accessibility.png" alt="Acessibilidade" class="accessibility-button-icon" />
    </button>

    <div class="accessibility-options" id="accessibility-options">
      <p class="accessibility-option" id="accessibility-contrast-button">
        <img src="src/assets/contrast.png" alt="Constraste" class="accessibility-option-icon" />
        Contraste
      </p>
      <p class="accessibility-option" id="increase-font-accessibility-button">
        <img src="src/assets/font.png" alt="Aumentar fonte" class="accessibility-option-icon" />
        Aumentar fonte
      </p>
      <p class="accessibility-option" id="decrease-font-accessibility-button">
        <img src="src/assets/font.png" alt="Diminuir fonte" class="accessibility-option-icon" />
        Diminuir fonte
      </p>
    </div>
  </div>

  <header class="apr-header">
    <h1>APR DIGITAL</h1>
    <h1>Gerenciamento de risco crítico</h1>
  </header>

  <main>
    <?php foreach ($formulary["sections"] as $section): ?>
      <section class="section">
        <h1 class="section-title"> <?php echo $section["name"] ?> </h1>

        <div class="section-area">
          <?php foreach ($section["inputs"] as $input): ?>
            <!-- Faz  a checagem se os inputs devem ser divididos em colunas -->
            <?php if (isset($input["grid"])): ?>
              <div class="grid-<?php echo $input["grid"] ?>">
              <?php endif; ?>

              <!-- Estilização de inputs de tipos específicos ("text", "number", "date", "time") -->
              <?php if (isset($input["type"]) && in_array($input["type"], ["text", "number", "date", "time"])): ?>
                <div class="section-input">
                  <label for="<?php echo $input["name"] ?>" class="section-input-label"><?php echo $input["label"] ?></label>
                  <input type="<?php echo $input["type"] ?>" name="<?php echo $input["name"] ?>"
                    id="<?php echo $input["name"] ?>" placeholder="<?php echo $input["placeholder"] ?>"
                    class="section-input-field" />
                </div>
              <?php endif; ?>

              <!-- Estilização de inputs de tipos específicos ("radio") -->
              <?php if (isset($input["type"]) && in_array($input["type"], ["radio"])): ?>
                <div class="section-input">
                  <label for="<?php echo $input["name"] ?>"
                    class="section-input-label section-input-label-radio"><?php echo $input["label"] ?></label>
                  <?php foreach ($input["options"] as $option): ?>
                    <div class="section-input-options">
                      <input type="<?php echo $input["type"] ?>" name="<?php echo $input["name"] ?>" class="section-input-field"
                        value="<?php echo $option ?>" id="<?php echo "$input[name]-$option" ?>" />
                      <label for="<?php echo "$input[name]-$option" ?>"><?php echo $option ?></label>
                    </div>
                  <?php endforeach; ?>
                </div>

                <?php if ($input !== end($section["inputs"])): ?>
                  <div class="section-input-break-line"></div>
                <?php endif; ?>
              <?php endif; ?>


            <?php endforeach; ?>
          </div>
      </section>
    <?php endforeach; ?>
  </main>

  <script src="src/js/accessibility_toggle.js"></script>
  <script src="src/js/contrast_toggle.js"></script>
  <script src="src/js/change_font.js"></script>
</body>

</html>