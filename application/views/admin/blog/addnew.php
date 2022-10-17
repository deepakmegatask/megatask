
<style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                min-height: 200px;
            }
            .ck-content .image {
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css">
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      <a href="<?php echo base_url();?>admin/blog"> <i class="fa fa-rss" aria-hidden="true"></i> Blog</a>
      <small>Add New Blog</small>
   </h1>
</section>
<section class="content">
   <div class="row">
      <!-- Success & Error Alert-->
      <div class="col-md-12">
       
         <?php
            $this->load->helper('form');
            
            
            $error = $this->session->flashdata('error');
            
            
            if($error)
            
            
            {
            
            
            ?>
         <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $this->session->flashdata('error'); ?>                    
         </div>
         <?php } ?>
         <?php  
            $success = $this->session->flashdata('success');
            
            
            if($success)
            
            
            {
            
            
            ?>
         <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $this->session->flashdata('success'); ?>
         </div>
         <?php } ?>
         <div class="row">
            <div class="col-md-12">
               <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
         </div>
      </div>
      <!-- Success & Error Alert-->
      <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
            <div class="box-header">
               <h3 class="box-title">Add New blogs</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="member_form" action="<?php echo base_url() ?>admin/blog/insertnow" method="post" role="form" enctype="multipart/form-data">
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-6">
                        <!-- Name-->                            
                        <div class="form-group">
                           <label for="name"> Title Name </label>
                           <input type="text" id="name" name ="name" class="form-control" required="required" placeholder="Enter Your Title Name" 
                                 onkeyup="convertToSlug(this.value)" >
                        </div>

                        <!-- Slug-->                            
                        <div class="form-group">
                           <label for="slug"> Slug Url </label>
                           <input type="text" id="slug" name ="slug" class="form-control" style="text-transform: lowercase;" placeholder="Enter Your Slug Name" required="required" readonly onkeyup="changes_slug(this.value)" >
                           <a href="javascript:" onclick="enable_slug()">Change</a>
                           <span id="err_slug" style="color:red;"></span>
                        </div>


                        <div class="form-group">
                           <label for="Description">Description</label></br>
                           <textarea name="editor" id="editor" required="required" placeholder="Enter Blog Description"  rows="4" cols="106">
                           </textarea>
                        </div>
                        <!--Created By-->                             
                        <div class="form-group">
                           <label for="Created By">Created By</label>
                           <input type="text" id="create" name ="create" class="form-control" value="Megatask Technologies">
                        </div>
                        <!--Image-->                             
                        <div class="form-group">
                           <label for="Image">Image</label>
                           <input type="file" id="image" name ="image" class="form-control">
                        </div>
                        <!--Status-->
                        <div class="form-group">
                           <label for="status">Status</label>
                           <select class ="form-control" name="status" id="status">
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                        </div>

                        <!-- /.box-body -->
                          <div class="box-footer">
                             <input type="submit" id="submit" class="btn btn-primary" value="Submit" />
                             <input type="reset" class="btn btn-default" value="Reset" />
                          </div>
                     </div>
                
                     <div class="col-md-6">
                        <!--Meta Title-->                             
                        <div class="form-group">
                           <label for="Meta Title">Meta Title</label>
                           <input type="text" id="mt-title" name ="mt-title" class="form-control" required="required" placeholder="Enter Meta Title Code" >
                        </div>
                        <!--Meta Description-->                             
                        <div class="form-group">
                           <label for="Meta Description">Meta Description</label>
                           <input type="text" id="mt-desc" name ="mt-desc" class="form-control"  placeholder="Enter Meta Description" >
                        </div>
                        <!--Meta Keyword-->                             
                        <div class="form-group">
                           <label for="Meta Keyword">Meta Keyword</label>
                           <input type="text" id="mt-keyword" name ="mt-keyword" class="form-control"  placeholder="Enter Meta Keyword" >
                        </div>
                        <!--Meta Robot-->                             
                        <div class="form-group">
                           <label for="Meta Robot">Meta Robot</label>
                           <input type="text" id="mt-robot" name ="mt-robot" class="form-control"  placeholder="Enter Meta Robot" >
                        </div>
                        <div class="form-group">
                           <label for="Image Alternate Name">Image Alternate Name</label>
                           <input type="text" id="img-alt" name ="img-alt" class="form-control">
                        </div>
                     </div>
                  </form>
            </div>
         </div>
      </div>
</section>
</div>






<script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/super-build/ckeditor.js"></script>
        <script>
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                toolbar: {
                    items: [
                        'exportPDF','exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Welcome to CKEditor 5!',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType'
                ]
            });
        </script>










 
<!-- <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> -->
<!-- <script>
   CKEDITOR.replace( 'desc' );
</script> -->
<script>
   function convertToSlug(str) {
    //replace all special characters | symbols with a space
  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ')
           .toLowerCase();
    
  // trim spaces at start and end of string
  str = str.replace(/^\s+|\s+$/gm,'');
    
  // replace space with dash/hyphen
  str = str.replace(/\s+/g, '-');  
  document.getElementById("slug").value=str; 
  checkSlugUrl(str);
  return str;
}

 







function checkSlugUrl(slugg)
{
    $.ajax(


        {


            type:"POST",


            url:"<?php echo base_url();?>admin/blog/check_slug", 


            data:"slug_url="+slugg,


            success:function(returnVal)


            {
               if(returnVal=='slug_exist')
               {
                 
                  $("#submit").attr('disabled','disabled');
                   $("#err_slug").html('Alredy Exist');
                   //$("#err_slug").delay(5000).hide(0);
               }else
               {
                  
                $("#submit").removeAttr('disabled');  
                $("#err_slug").html('Available');
                //$("#err_slug").delay(5000).hide(0);
            }
        }
     });   
}
function enable_slug()
{
   var check_readonl = $("#slug").attr('readonly');
   if(check_readonl=='readonly')
   {
      $("#slug").removeAttr('readonly');
   }else
   {
       $("#slug").attr('readonly','readonly');
   }
}

function changes_slug(valuee)
{
   var temp_slug = $("#slug").val();
      var str = convertToSlug(temp_slug);
         checkSlugUrl(str);
}
 
</script>
