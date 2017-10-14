<script type="text/javascript">

    $(document).ready(function() {

      tinymce.init({
            selector: 'textarea',
            height: 300,
            plugins: 'textcolor image codesample imagetools link table lists advlist',
            toolbar: 'formatselect fontselect fontsizeselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_caption: true,
            image_advtab: true,
            media_live_embeds: true,
            // imagetools_cors_hosts: ['tinymce.com', 'codepen.io'],
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.css',
              '//www.tinymce.com/css/codepen.min.css'
            ]
            });
   });

</script>
