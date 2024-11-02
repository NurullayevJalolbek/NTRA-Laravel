
<div class="container relative">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
            <div>
                <p class="font-medium mb-4">Rasmni shu yerga olib keling yoki "Rasm yuklash" tugmasini bosing</p>
                <div
                    class="preview-box flex justify-center rounded-md shadow dark:shadow-gray-800 overflow-hidden bg-gray-50 dark:bg-slate-800 text-slate-400 p-2 text-center small w-auto max-h-60">
                    Qabul qilinadigan kengaytmalar: JPG, PNG
                    <br> Hajm bo'yicha cheklov: 10MB
                </div>
                <input form="ads-create" type="file" id="input-file" name="image" accept="image/*"
                       onchange={handleChange()} hidden>
                <label
                    class="btn-upload btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-6 cursor-pointer"
                    for="input-file">
                    <i class="mdi mdi-upload me-2"></i>Rasm yuklash
                </label>
            </div>
        </div>

        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit">
            <form id="ads-create" action="<?php echo e($action); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php if( request()->route()->getName() === 'ads.update'): ?>
                    <input type="hidden" name="_method" value="patch">
                <?php endif; ?>
                <div class="grid grid-cols-12 gap-5">
                    <div class="col-span-12">
                        <label for="title" class="font-medium">Sarlavha:</label>
                        <input name="title" id="title" type="text" class="form-input mt-2"
                               placeholder="Sarlavha" value="<?php echo e($ad?->title); ?>">
                    </div>

                    <div class="md:col-span-12 col-span-12">
                        <label for="description" class="font-medium">Ta'rif:</label>
                        <div class="form-icon relative mt-2">
                            <i class="mdi mdi-text-box-outline absolute top-2 start-4 text-green-600"></i>
                            <textarea name="description" id="description" class="form-input ps-11"
                                      placeholder="E'lon bo'yicha ta'rif..."><?php echo e($ad?->description); ?></textarea>
                        </div>
                    </div>

                    <div class="md:col-span-12 col-span-12">
                        <label for="address" class="font-medium">Manzil:</label>
                        <div class="form-icon relative mt-2">
                            <i class="mdi mdi-map-marker-outline absolute top-2 start-4 text-green-600"></i>
                            <input name="address" id="address" type="text" class="form-input ps-11"
                                   placeholder="Manzil:" value="<?php echo e($ad?->address); ?>">
                        </div>
                    </div>
                    <div class="md:col-span-12 col-span-12">
                        <label for="branch" class="font-medium">Filial:</label>
                        <div class="form-icon relative mt-2">
                            <select
                                class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                id="branch" name="branch_id">

                                <?php echo e(isset($ad) ? '' : "<option value='0'>Filialni tanlang</option>"); ?>

                                <?php $__currentLoopData = $branches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $branch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value='<?php echo e($branch->id); ?>' selected><?php echo e($branch->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>

                    <div class="md:col-span-12 col-span-12">
                        <label for="gender" class="font-medium">Kim uchun:</label>
                        <div class="form-icon relative mt-2">
                            <select
                                class="form-select form-input w-full py-2 h-10 bg-white dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 focus:border-gray-200 dark:border-gray-800 dark:focus:border-gray-700 focus:ring-0"
                                id="gender" name="gender">

                                <?php echo e(isset($ad) ? '' : "<option value='0'>Kim uchun</option>"); ?>

                                <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($ad) && $gender->id === $ad->branch_id): ?>
                                        <option value='<?php echo e($gender); ?>' selected><?php echo e($gender); ?></option>
                                    <?php else: ?>
                                        <option value='<?php echo e($gender); ?>'><?php echo e($gender); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-span-12">
                        <label for="price" class="font-medium">Narxi:</label>
                        <div class="form-icon relative mt-2">
                            <i class="mdi mdi-currency-usd absolute top-2 start-4 text-green-600"></i>
                            <input name="price" id="price" type="number" class="form-input ps-11"
                            placeholder="Narxi($):" value="<?php echo e($ad?->price); ?>">
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label for="rooms" class="font-medium">Xonalar:</label>
                        <div class="form-icon relative mt-2">
                            <input name="rooms" id="rooms" type="number" class="form-input ps-11"
                                   placeholder="Xonalar:" value="<?php echo e($ad?->rooms); ?>">
                        </div>
                    </div>
                </div>

                <button type="submit" id="submit" name="send"
                        class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">
                    <i class="mdi mdi-content-save me-2"></i>
                    Saqlash
                </button>
            </form>
        </div>
    </div>
</div>

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

<?php /**PATH /var/www/resources/views/components/ad-form.blade.php ENDPATH**/ ?>