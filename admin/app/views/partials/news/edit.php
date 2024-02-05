<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title"><?php print_lang('edit_news'); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("news/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="title"><?php print_lang('title'); ?> <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-title"  value="<?php  echo $data['title']; ?>" type="text" placeholder="<?php print_lang('enter_title'); ?>"  required="" name="title"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="title_jp"><?php print_lang('title_jp'); ?> <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-title_jp"  value="<?php  echo $data['title_jp']; ?>" type="text" placeholder="<?php print_lang('enter_title_jp'); ?>"  required="" name="title_jp"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="description"><?php print_lang('description'); ?> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <textarea placeholder="<?php print_lang('enter_description'); ?>" id="ctrl-description"  rows="5" name="description" class=" form-control"><?php  echo $data['description']; ?></textarea>
                                                        <!--<div class="invalid-feedback animated bounceIn text-center"><?php print_lang('please_enter_text'); ?></div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="description_jp"><?php print_lang('description_jp'); ?> </label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <textarea placeholder="<?php print_lang('enter_description_jp'); ?>" id="ctrl-description_jp"  rows="5" name="description_jp" class=" form-control"><?php  echo $data['description_jp']; ?></textarea>
                                                        <!--<div class="invalid-feedback animated bounceIn text-center"><?php print_lang('please_enter_text'); ?></div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="photo"><?php print_lang('photo'); ?> <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <div class="dropzone required" input="#ctrl-photo" fieldname="photo"    data-multiple="false" dropmsg="<?php print_lang('choose_files_or_drag_and_drop_files_to_upload'); ?>"    btntext="<?php print_lang('browse'); ?>" extensions=".jpg,.png,.gif,.jpeg" filesize="300" maximum="1">
                                                            <input name="photo" id="ctrl-photo" required="" class="dropzone-input form-control" value="<?php  echo $data['photo']; ?>" type="text"  />
                                                                <!--<div class="invalid-feedback animated bounceIn text-center"><?php print_lang('please_a_choose_file'); ?></div>-->
                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                            </div>
                                                        </div>
                                                        <?php Html :: uploaded_files_list($data['photo'], '#ctrl-photo'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="gallery"><?php print_lang('gallery'); ?> </label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <div class="dropzone " input="#ctrl-gallery" fieldname="gallery"    data-multiple="true" dropmsg="<?php print_lang('choose_files_or_drag_and_drop_files_to_upload'); ?>"    btntext="<?php print_lang('browse'); ?>" extensions=".jpg,.png,.gif,.jpeg" filesize="3000" maximum="100">
                                                                <input name="gallery" id="ctrl-gallery" class="dropzone-input form-control" value="<?php  echo $data['gallery']; ?>" type="text"  />
                                                                    <!--<div class="invalid-feedback animated bounceIn text-center"><?php print_lang('please_a_choose_file'); ?></div>-->
                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                </div>
                                                            </div>
                                                            <?php Html :: uploaded_files_list($data['gallery'], '#ctrl-gallery'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="upload_date"><?php print_lang('upload_date'); ?> <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="input-group">
                                                                <input id="ctrl-upload_date" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['upload_date']; ?>" type="datetime" name="upload_date" placeholder="<?php print_lang('enter_upload_date'); ?>" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-ajax-status"></div>
                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary" type="submit">
                                                        <?php print_lang('update'); ?>
                                                        <i class="fa fa-send"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
