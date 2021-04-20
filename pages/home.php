<?php include "structure.php" ?>
<div class="container">
            <div class="row">
                <?php foreach (API_USERS() as $AU) { ?>
                    <div class="col-lg-4">
                        <div class="card my-2">
                            <div class="card-body">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Name</th>
                                            <td width="50" class="text-center">:</td>
                                            <td><?= $AU->name ?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td width="50" class="text-center">:</td>
                                            <td><?= $AU->email ?></td>
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <td width="50" class="text-center">:</td>
                                            <td>
                                                <?= $AU->address->street ?>
                                                <?= $AU->address->suite ?>
                                                <?= $AU->address->city ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Company</th>
                                            <td width="50" class="text-center">:</td>
                                            <td><?= $AU->company->name ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer showPosts">
                                <button class="btn btn-primary btn-block" onclick="showAllPosts(<?= $AU->id ?>)">
                                    <small>Show All Posts</small>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>