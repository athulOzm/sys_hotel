<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo html_escape((!empty($title)?$title:null)) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                <div class="">
                    <table class="datatable table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?php echo display('sl_no') ?></th>
                                <th><?php echo display('image') ?></th>
                                <th><?php echo display('username') ?></th>
                                <th><?php echo display('email') ?></th>
                                <th><?php echo display('about') ?></th>
                                <th><?php echo display('last_login') ?></th>
                                <th><?php echo display('last_logout') ?></th>
                                <th><?php echo display('ip_address') ?></th>
                                <th><?php echo display('status') ?></th>
                                <th><?php echo display('action') ?></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($user)) ?>
                            <?php $sl = 1; ?>
                            <?php foreach ($user as $value) { ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><img src="<?php echo html_escape(base_url(!empty($value->image)?$value->image:'assets/img/user/user.png')); ?>" alt="Image" height="64" ></td>
                                <td><?php echo html_escape($value->fullname); ?></td>
                                <td><?php echo html_escape($value->email); ?></td>
                                <td><?php echo character_limiter(html_escape($value->about), 20); ?></td>
                                <td><?php echo html_escape($value->last_login); ?></td>
                                <td><?php echo html_escape($value->last_logout); ?></td>
                                <td><?php echo html_escape($value->ip_address); ?></td>
                                <td><?php echo ((html_escape($value->status)==1)?display('active'):display('inactive')); ?></td>
                                <td>
                                    <?php if ($value->is_admin == 0) { ?>
                                    <a href="<?php echo base_url("edit-user/".html_escape($value->id)) ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="<?php echo base_url("delete-user/".html_escape($value->id)) ?>" onclick="return confirm('<?php echo display("are_you_sure") ?>')" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="right" title="Delete "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <?php } else { ?> 
                                    <button class="btn btn-info btn-sm" title="<?php echo display('admin') ?>"><?php echo display('admin') ?></button>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php } ?> 
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>

 