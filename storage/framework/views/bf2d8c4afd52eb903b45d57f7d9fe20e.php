<?php if(config('moonshine.use_notifications', true) && auth()->user()?->unreadNotifications?->isNotEmpty()): ?>
    <!-- Notifications -->
    <div class="notifications">
        <?php if (isset($component)) { $__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f = $attributes; } ?>
<?php $component = MoonShine\Components\Dropdown::resolve(['placement' => 'bottom-end','title' => trans('moonshine::ui.notifications.title')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Dropdown::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[264px] xs:w-80']); ?>
             <?php $__env->slot('toggler', null, ['class' => 'notifications-icon']); ?> 
                <span class="absolute top-0 right-1 h-2 w-2 rounded-lg bg-red-500"></span>
                <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.outline.bell','color' => 'gray','size' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>

            <?php $__currentLoopData = auth()->user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="notifications-item">
                    <a href="<?php echo e(route('moonshine.notifications.read', $notification)); ?>"
                       class="notifications-remove"
                       title="<?php echo app('translator')->get('moonshine::ui.notifications.mark_as_read'); ?>"
                    >
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.x-mark'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
                    </a>

                    <div class="notifications-category badge-<?php echo e($notification->data['color'] ?? 'green'); ?>">
                        <?php if (isset($component)) { $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee = $attributes; } ?>
<?php $component = MoonShine\Components\Icon::resolve(['icon' => 'heroicons.information-circle'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('moonshine::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\MoonShine\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $attributes = $__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__attributesOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee)): ?>
<?php $component = $__componentOriginal02cd8db43c93f795a84d3988e7d5cfee; ?>
<?php unset($__componentOriginal02cd8db43c93f795a84d3988e7d5cfee); ?>
<?php endif; ?>
                    </div>

                    <div class="notifications-content">
                        <h5 class="notifications-title"></h5>
                        <p class="notifications-text"><?php echo e($notification->data['message']); ?></p>

                        <?php if(isset($notification->data['button']['link'])): ?>
                            <div class="notifications-more">
                                <a href="<?php echo e($notification->data['button']['link']); ?>">
                                    <?php echo e($notification->data['button']['label']); ?>

                                </a>
                            </div>
                        <?php endif; ?>

                        <span class="notifications-time"><?php echo e($notification->created_at->format('d.m.Y H:i')); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             <?php $__env->slot('footer', null, []); ?> 
                <a href="<?php echo e(route('moonshine.notifications.readAll')); ?>" class="notifications-read">
                    <?php echo app('translator')->get('moonshine::ui.notifications.mark_as_read_all'); ?>
                </a>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f)): ?>
<?php $attributes = $__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f; ?>
<?php unset($__attributesOriginal72a1269c3b015b9696f9fb4cbf02b44f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f)): ?>
<?php $component = $__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f; ?>
<?php unset($__componentOriginal72a1269c3b015b9696f9fb4cbf02b44f); ?>
<?php endif; ?>
    </div>
    <!-- END: Notifications-->
<?php endif; ?>
<?php /**PATH /var/www/vendor/moonshine/moonshine/resources/views/layouts/shared/notifications.blade.php ENDPATH**/ ?>