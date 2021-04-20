<?php include "structure.php" ?>
<div class="container">
    <div class="row">
        <?php foreach (API_USERS_ID($_GET['user']) as $AUD) { ?>
            <div class="col-lg-4">
                <div class="card my-2">
                    <div class="card-body">
                        <table>
                            <tbody>
                                <tr>
                                    <th colspan="3">
                                        <?= $AUD->title ?>
                                    </th>
                                </tr>
                                <tr>
                                    <td colspan="3"><hr /></td>
                                </tr>
                                <tr>
                                    <th>Author</th>
                                    <td width="50" class="text-center">:</td>
                                    <td>
                                        <?php foreach (API_FIND_USERS_ID($AUD->userId) as $AFUD) {
                                            echo $AFUD->name;
                                        } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer showDetailPosts">
                        <button class="btn btn-primary btn-block" onclick="showDetailPost('<?= $AUD->id ?>')">
                            <small>Detail Post</small>
                        </button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>