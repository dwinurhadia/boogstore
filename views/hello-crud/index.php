<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->title = 'Hello Crud';

?>

<div class="row">
    <div class="col-md-12">
        <h1>Teams List</h1>
        <hr>

        <?php 
        echo Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li>\n", //template for all links
            'links' => [
                'Teams List',
            ],
        ]);
        ?>

    </div>
</div>

<div>
    <div class="col-md-12">
            <div class="list-group">
                <a href="<?php echo Url::to(['hello-crud/index']); ?>" class="list-group-item"><i class="glyphicon glyphicon-plus"></i>Add Teams</a>
                <a href="<?php echo Url::to(['hello-crud/delete-all']); ?>" class="list-group-item"><i class="glyphicon glyphicon-trash"></i>Delete All</a>
            </div>
    </div>

    <div class="col-md-10">
            <table class="table table-striped">
            <thead>
            <tr>
            <th>Name</th>
            <th>League</th>
            <th>Country</th>
            <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php if (count($teams) > 0 ) { ?>
                <?php foreach ($teams as $team ): ?>
                <tr>
                <td><?= Html::encode("{$team['name']}") ?></td>
                <td><?= Html::encode("{$team->leagues['name']}") ?></td>
                <td><?= Html::encode("{$team['country']}") ?></td>
                <td style="width:15%; text-align:center;">
                    <a href="<?php echo Url::to(['hello-crud/detail', 'id'=>$teams['id']]); ?>" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-eye-open"></a>
                </td>
                </tr>
                <?php endforeach; ?>
                <?php } else { ?>
                <tr>
                    <td style="text-align:center; font-size:15px; padding:25px;" colspan="5">No data Found</td>
                </tr>
                <?php } ?>            
            </tbody>
            </table>
    </div>
</div>