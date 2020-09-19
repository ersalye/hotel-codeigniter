<?php  $this->load->view('adminheader');	?>
       <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                                <div class="card">
    <div class="card-header">
        <h3 class="card-title"><?php  echo $pages['name']; ?></h3>
    </div>
	<style>
                     .req{
                     color:red;
                     }
                  </style>
    <div class="card-body collapse in">
        <div class="card-block">
            <form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
                
                
                
					
               <?php //print_r($pages); ?>
                <div class="form-group col-xs-12 mb-2">
                   
                   <textarea name="content" id="editor1"><?php echo $pages['content']; ?>
				   
				   </textarea>
            
					
                </div>
				
                <div class="col-xs-12 mb-2">
                    <a href="<?php echo base_url('Admin'); ?>" class="btn btn-warning mr-1">
                        <i class="ft-x"></i> Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
 
      <footer class="footer footer-static footer-light navbar-border">
         <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-xs-block d-md-inline-block">
            © 2018 Storkks 
            </span>
         </p>
      </footer>
     
      <!-- BEGIN VENDOR JS-->
      <script src="<?php echo base_url(); ?>admin-assets/js/vendors.min.js" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
     
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN STACK JS-->
      <script src="<?php echo base_url(); ?>admin-assets/js/app-menu.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>admin-assets/js/app.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>admin-assets/js/customizer.min.js" type="text/javascript"></script>
<!--	  <script src="https://sdk.ckeditor.com/vendor/ckeditor/4.9.2/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
      END STACK JS-->
     <!-- BEGIN PAGE LEVEL JS-->
     
       <script src="https://cloud.tinymce.com/dev/tinymce.min.js"></script>
  <script>
  tinymce.init({
  selector: "textarea",
  height: 450,
     plugins: [
"advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
"table contextmenu directionality emoticons template textcolor paste "
],

  toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
  toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
  toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | visualchars visualblocks nonbreaking template pagebreak restoredraft",
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'],

  menubar: false,
  toolbar_items_size: 'small',

  style_formats: [{
    title: 'Bold text',
    inline: 'b'
  }, {
    title: 'Red text',
    inline: 'span',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Red header',
    block: 'h1',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Example 1',
    inline: 'span',
    classes: 'example1'
  }, {
    title: 'Example 2',
    inline: 'span',
    classes: 'example2'
  }, {
    title: 'Table styles'
  }, {
    title: 'Table row 1',
    selector: 'tr',
    classes: 'tablerow1'
  }],

  templates: [{
    title: 'Test template 1',
    content: 'Test 1'
  }, {
    title: 'Test template 2',
    content: 'Test 2'
  }],
  
  init_instance_callback: function () {
    window.setTimeout(function() {
      $("#div").show();
     }, 1000);
  }
});

  </script>
   </body>
</html>