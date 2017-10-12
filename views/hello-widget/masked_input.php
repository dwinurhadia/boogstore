<?php
use yii\widgets\MaskedInput;
$this->title = 'Demo Masked Input';
?>

<h1>Demo Masked Input</h1>
<p>Ini adalah contoh penggunaan masked input pada yii2</p>

<?php
echo "<p>Telepon:</p>";

echo MaskedInput::widget([
    'name' => 'telepon',
    'mask' => '(999)-999-9999',
]);

echo "<br />";

echo "<p>Handphone:</p>";

echo MaskedInput::widget([
    'name' => 'handphone',
    'mask' => '+(99)-999-9999-9999',
]);

echo "<br />";

echo "<p>Tanggal Lahir:</p>";

echo MaskedInput::widget([
    'name' => 'tanggal_lahir',
    'mask' => '9999-99-99',
]);

echo "<br />";

echo "<p>Kop Surat:</p>";

echo MaskedInput::widget([
    'name' => 'kop_surat',
    'mask' => '99/9999/9999/9999/99',
]);

echo "<br />";

echo "<p>IP Address:</p>";

echo MaskedInput::widget([
    'name' => 'ip_address',
    'mask' => '999.999.999.999',
]);


?>