<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
                    <div class="col-md-12">
                        <div style="margin-bottom:5px;">
                            <a href="index.php?controller=news&action=create" class="btn btn-primary">Add news</a>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading">List news</div>
                            <div class="panel-body">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th style="width:100px;">Photo</th>
                                        <th>Name</th>
                                        <th style="width:100px; text-align: center;">Hot</th>
                                        <th style="width:100px;"></th>
                                    </tr>
                                    <?php foreach ($data as $rows): ?>
                                    <tr>
                                        <td style="text-align: center;">
                                        	<?php if($rows->photo != "" && file_exists("../assets/upload/news/".$rows->photo)): ?>
                                        		<img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width: 100px;">
                                        	<?php endif; ?>
                                        	</td>
                                        <td><?php echo $rows->name; ?></td>
                                        <td style="text-align: center;">
                                        	<?php if($rows->hot ==1): ?>
                                        		<span class="fa fa-check"></span>
                                        	<?php endif; ?>
                                        </td>
                                        <td style="text-align:center;">
                                            <a href="index.php?controller=news&action=update&id=<?php echo $rows->id ?>">Edit</a>&nbsp;
                                            <a href="index.php?controller=news&action=delete&id=<?php echo $rows->id ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </table>
                                <style type="text/css">
                                    .pagination{padding:0px; margin:0px;}
                                </style>
                                <div>
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#">Page</a></li>
                                        <?php for($i = 1; $i <= $numPage; $i++): ?>
                                        <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                                    <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>