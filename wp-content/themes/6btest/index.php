<?php get_header(); ?>

<?php
// Check carousel rows exist
if( have_rows('carousel') ): ?>

    <div class="carousel-wrapper">

        <?php while( have_rows('carousel') ) : the_row(); ?>

            <div class="carousel-wrapper--item flex flex-col border-b border-gray-200 lg:border-0">
                <div class="relative">
                    <div aria-hidden="true" class="absolute hidden h-full w-1/2 bg-gray-100 lg:block"></div>
                    <div class="relative bg-gray-100 lg:bg-transparent">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8">
                            <div class="mx-auto max-w-2xl py-24 lg:max-w-none lg:py-64">
                                <div class="lg:pr-16">
                                    <?php if($pre_title = get_sub_field('pre-title') ?? ""): ?>
                                        <p class="text-base text-white"><?php echo $pre_title; ?></p>
                                    <?php endif; ?>
                                    
                                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl xl:text-6xl">Focus on
                                        what matters</h1>
                                    <p class="mt-4 text-xl text-gray-600">All the charts, datepickers, and notifications in the
                                        world can't beat checking off some items on a paper card.</p>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 font-medium text-white hover:bg-indigo-700">Shop
                                            Productivity</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:h-64 lg:absolute lg:right-0 lg:top-0 lg:h-full lg:w-1/2">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-hero-half-width.jpg" alt=""
                            class="h-full w-full object-cover object-center">
                    </div>
                </div>
            </div>

        <?php // End loop.
        endwhile; ?>

    </div>

<?php // No value.
else :
    // Do something...
endif;

get_footer(); ?>


