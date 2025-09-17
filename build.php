<?php

$distDir = __DIR__ . "/dist";
$srcDir = __DIR__ . "/src";

ob_start();
include __DIR__ . "/index.php";
$html = ob_get_clean();

if (!is_dir($distDir)) {
    mkdir($distDir, 0777, true);
}

file_put_contents("$distDir/index.html", $html);
echo "✅ HTML gerado em dist/index.html\n";

function copyDirectory($src, $dst)
{
    $dir = opendir($src);
    @mkdir($dst, 0777, true);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir("$src/$file")) {
                copyDirectory("$src/$file", "$dst/$file");
            } else {
                copy("$src/$file", "$dst/$file");
            }
        }
    }
    closedir($dir);
}

if (is_dir($srcDir)) {
    copyDirectory($srcDir, "$distDir/src");
    echo "✅ Pasta src copiada para dist/src\n";
} else {
    echo "⚠️ Pasta src não encontrada, pulei a cópia.\n";
}

copy("formulary.json", "$distDir/formulary.json");

echo "🎉 Build completo! Agora você pode publicar a pasta dist/.\n";
