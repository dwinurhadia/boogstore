<?php
use yii\widgets\Breadcrumbs;
$this->title = 'Demo Breadcrumbs';
?>

<?php
echo Breadcrumbs::widget([
    'links' => [
        ['label' => 'Daftar Jadwal Sidang', 'url' => ['site/index']],
        ['label' => 'Daftar Ruang Ujian', 'url' => ['site/index']],
        ['label' => 'Penguji Sidang', 'url' => ['site/index']],
        'Tambah Penguji',
    ],
]);

?>