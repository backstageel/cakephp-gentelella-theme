<%
use Cake\Utility\Inflector;
%>
<div class="page-title">
    <div class="title_left">
        <h3>
            <%= $singularHumanName %>
            <small><?= __('<%= Inflector::humanize($action) %>') ?></small>
        </h3>
    </div>

    <div class="title_right">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
            <?= $this->Html->link(__('<i class="fa fa-dashboard"></i> Back'), ['action' => 'index'], ['class' => 'btn btn-success pull-right','escape'=>false]) ?>
        </div>
    </div>
    </div>

<!-- Main content -->
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="x_panel">
                <div class="x_title">
                    <h2><%= $singularHumanName %>
                        <small><?= __('<%= Inflector::humanize($action) %>') ?></small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- /.box-header -->
                    <!-- form start -->
                    <?= $this->Form->create($<%= $singularVar %>, array('role' => 'form')) ?>
                    <div class="box-body">
                        <?php
                        <%
                        foreach ($fields as $field) {
                            if (in_array($field, $primaryKey)) {
                                continue;
                            }
                            if (isset($keyFields[$field])) {
                                $fieldData = $schema->column($field);
                                if (!empty($fieldData['null'])) {
                                    %>
                                    echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, 'empty' => true, 'placeholder' => $<%= $singularVar %>-><%= $field %>, 'disabled' => true]);
<%
        } else {
                                    %>
                                    echo $this->Form->input('<%= $field %>', ['options' => $<%= $keyFields[$field] %>, $<%= $singularVar %>-><%= $field %>, 'disabled' => true]);
<%
        }
                                continue;
                            }
                            if (!in_array($field, ['created', 'modified', 'updated'])) {
                                $fieldData = $schema->column($field);
                                if (($fieldData['type'] === 'date') && (!empty($fieldData['null']))) {
                                    %>
                                    echo $this->Form->input('<%= $field %>', ['empty' => true, 'default' => '']);
                                    <%
                                } else {
                                    %>
                                    echo $this->Form->input('<%= $field %>', ['placeholder' => $<%= $singularVar %>-><%= $field %>, 'disabled' => true]);
<%
        }
                            }
                        }
                        if (!empty($associations['BelongsToMany'])) {
                            foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
                                %>
                                echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]);
<%
      }
                        }
                        %>
                        ?>
                    </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                        <?= $this->Form->button(__('Save')) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

