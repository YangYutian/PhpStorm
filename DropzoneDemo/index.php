<html>
<head>
    <link href="css/dropzone.css" type="text/css" rel="stylesheet">
    <script src="js/dropzone.js"></script>
</head>
<body>
<!--    <form action="" id="my-awesome-dropzone" class="dropzone"></form>-->
    <div id="my-awesome-dropzone" class="m-dropzone dropzone m-dropzone--primary">
        <div class="m-dropzone__msg dz-message needsclick">
            <h3 class="m-dropzone__msg-title">拖动图片至此.</h3>
            <span class="m-dropzone__msg-desc"> 只能上传1张图片,<br>格式为.jpg,.png,.jpeg,大小不大于2M</span>
        </div>
    </div>
<script type="text/javascript">
        // Dropzone.options.myAwesomeDropzone = {
        //     url: "upload.php",
        //     paramName: "file",
        //     maxFilesize: 2
        // }
        Dropzone.options.myAwesomeDropzone = false;
    var myDropzone = new Dropzone("div#my-awesome-dropzone",{
       url: "upload.php",
       maxFilesize: 2,
       maxFiles: 2,
       addRemoveLinks: true,
       accept: function (file, done) {
           // console.log(this.getAcceptedFiles());
           // console.log(this.getRejectedFiles());
           // console.log(this.getFilesWithStatus(Dropzone.ERROR));
           // console.log(this.getAddedFiles());
           // console.log(this.getAddedFiles().length);
           return done();
       },
       init: function () {
            console.log('init')
       }
    });
    myDropzone.on("sending",function (file,xhr, formData) {
        // console.log(myDropzone.getAcceptedFiles)
        console.log("sending may add data to server.");
    });
    myDropzone.on("thumbnail",function (file, dataUrl) {
        console.log("thumbnail ");
        // console.log(file);
        // console.log(dataUrl);
    });
    myDropzone.on("processing",function (file) {
        console.log("processing status.");
        // console.log(file)
    });    
    myDropzone.on("success",function (file) {
        console.log(this.files.length)
        if(this.files.length > this.options.maxFiles){
            this.disable()
        }
        // console.log(file)
        // console.log(file.previewElement);
        // console.log(file.previewElement.parentNode);
        // console.log(myDropzone.options.maxFiles);
    });
    myDropzone.on("removedfile",function (file) {
        
    });
    myDropzone.on("maxfilesexceeded",function (file) {
        console.log("msx");
        console.log(myDropzone.options.maxFilesize);
        // console.log(file)
    });
    myDropzone.on("maxfilesreached",function (file) {
        // this.disable();
    })
    myDropzone.on("complete",function (file) {
        console.log("complete ");
        // console.log(this.getAddedFiles().length)
    })

</script>
</body>
</html>