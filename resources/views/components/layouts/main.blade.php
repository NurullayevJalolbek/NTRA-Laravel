


<x-header />





<x-navbar />


{{ $slot }}



<x-footer/>

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top"
   class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 size-9 text-center bg-green-600 text-white justify-center items-center"><i
        class="uil uil-arrow-up"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
<script src="../assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="../assets/libs/tobii/js/tobii.min.js"></script>
<script src="../assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="../assets/libs/swiper/js/swiper.min.js"></script>
<script src="../assets/libs/feather-icons/feather.min.js"></script>
<script src="../assets/js/plugins.init.js"></script>
<script src="../assets/js/app.js"></script>


<script>
    const handleChange = () => {
        const fileUploader = document.querySelector('#input-file');
        const getFile = fileUploader.files
        if (getFile.length !== 0) {
            const uploadedFile = getFile[0];
            readFile(uploadedFile);
        }
    }

    const readFile = (uploadedFile) => {
        if (uploadedFile) {
            const reader = new FileReader();
            reader.onload = () => {
                const parent = document.querySelector('.preview-box');
                parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
            };

            reader.readAsDataURL(uploadedFile);
        }
    };
</script>
<!-- JAVASCRIPTS -->
</body>
</html>




