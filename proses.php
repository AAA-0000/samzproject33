<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $vx99n = $_POST["nomor"];
    $sub8x = $_POST["subdo"];

    if (isset($_POST["trigger_alpha_92"])) {
        $basePut92 = "x/$sub8x";
        $targetPut52 = $basePut92;

        mkdir($targetPut52);

        $sourceZip97 = "script2025/{$vx99n}.zip";
        $copyToZip73 = "{$targetPut52}/{$vx99n}.zip";
        copy($sourceZip97, $copyToZip73);

        $zipX = new ZipArchive;
        if ($zipX->open($copyToZip73) === TRUE) {
            $zipX->extractTo($targetPut52);
            $zipX->close();
        }

        unlink($copyToZip73);

        header("Location: success.php?folder=$basePut92");
        exit();
    }
}
?>
