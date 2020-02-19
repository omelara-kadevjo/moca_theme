<?php
/**
 *Template Name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tailwindcss
 */

get_header();
?>
<section class="w-full h-screen bg-cover bg-no-repeat bg-left" style="background-image: url('<?= get_template_directory_uri() ?>/images/home/PNG/map.png')">
    <div class="container mx-auto h-full flex items-center">
        <div class="w-1/2 flex flex-col">
            <h1 class="museoextrabold uppercase text-5xl text-dark tracking-wide">PHYSICAL THERAPY <span class="text-bluesky">DELIVERED</span> TO YOU</h1>
            <p class="museolight text-bluesky text-lg w-1/2 mt-3 tracking-wide">Available soon in Salt Lake City and surrounding areas.</p>
        </div>
    </div>
</section>
<section class="w-full py-32">
    <div class="container mx-auto flex justify-center flex-wrap">
        <div class="max-w-md">
            <span class="text-bluesky uppercase museolight text-center block">WHAT WE DO</span>
            <h2 class="text-dark uppercase museoextrabold tracking-wide text-2xl text-center mt-6">DIRECTLY CONNECTING PATIENTS AND PROVIDERS</h2>
        </div>
        <div class="w-full flex flex-wrap mt-6 md:mt-24">
            <div class="w-full md:w-1/3 p-6 rounded-lg hover:shadow-lg">
                <img src="" alt="">
                <h2 class="text-dark uppercase museoextrabold tracking-wide text-xl text-center mt-4">Reliable</h2>
                <p class="text-bluesky font-semibold museoregular mt-4 text-center">Certified Physical Therapists</p>
            </div>
            <div class="w-full md:w-1/3 p-6 rounded-lg hover:shadow-lg">
                <img src="" alt="">
                <h2 class="text-dark uppercase museoextrabold tracking-wide text-xl text-center mt-4">hasslee-free</h2>
                <p class="text-bluesky font-semibold museoregular mt-4 text-center">Fixed costs, no hidden fees, no insurance needed</p>
            </div>
            <div class="w-full md:w-1/3 p-6 rounded-lg hover:shadow-lg">
                <img src="" alt="">
                <h2 class="text-dark uppercase museoextrabold tracking-wide text-xl text-center mt-4">personalized</h2>
                <p class="text-bluesky font-semibold museoregular mt-4 text-center">Direct medical access at your most convenient location</p>
            </div>
        </div>
    </div>
</section>
<section class="w-full py-32">
    <div class="w-full flex flex-wrap">
        <div class="w-full md:w-1/2">

        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-dark font-bold museoextrabold">How does <span>MOCA</span> work?</h2>
            <div class="w-full flex mt-8">
                <img src="" alt="">
                <p class="text-dark text-semibold museobold tracking-wide">Choose a location</p>
            </div>
            <div class="w-full flex mt-8">
                <img src="" alt="">
                <p class="text-dark text-semibold museobold tracking-wide">Choose your physical therapist</p>
            </div>
            <div class="w-full flex mt-8">
                <img src="" alt="">
                <p class="text-dark text-semibold museobold tracking-wide">Schedule your visit</p>
            </div>
        </div>
    </div>
</section>
<section class="w-full py-32">
    <div class="container mx-auto flex justify-center">
        <div class="max-w-2xl rounded-lg shadow-lg py-10 px-6">
        <div class="w-full flex flex-wrap">
            <div class="w-1/2 px-10">
                <h1 class="uppercase text-dark museoextrabold text-3xl text-right">The MOCA Way</h1>
            </div>
            <div class="w-1/2 px-10">
            <h1 class="uppercase text-dark museoextrabold text-3xl text-left opacity-25">The Old Way</h1>
            </div>
        </div>
        <div class="w-full flex py-4 mt-6">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Direct access to physical therapists</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Visit the doctor, then the orthopedist, then the physical therapist (Higher Costs)</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Provider and patient driven marketplace</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Provider and patient driven pricing</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Transparent pricing</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Provider and patient driven pricing</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">No insurance needed</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Insurance requirements and paperwork</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Therapists come to you</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Excessive wait time at a clinic</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Personalized physical therapist search and filters based on your location</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Physical therapists chosen for you</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Direct messaging</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Lengthy call back and wait time</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Built-in scheduling based on your availability</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Rigid schedule based on clinic availability</p>
            </div>
        </div>
        <div class="w-full flex py-4">
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-right">Physical therapist driven documentation</p>
            </div>
            <div>
                <img class=" px-10" src="" alt="">
            </div>
            <div class="w-1/2">
                <p class="text-dark font-semibold museobold text-base text-left opacity-75">Rigid schedule based on clinic availability</p>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="w-full py-32 sky">
    <div class="w-full flex flex-wrap">
        <div class="w-full md:w-1/2">

        </div>
        <div class="w-full md:w-1/2">
           <p class="text-dark font-bold museoextrabold tracking-wide w-full md:w-1/3 text-lg leading-snug">We are looking to build a coalition of professionals and patients to <span class="text-bluesky">transform the healthcare industry.</span></p>
        </div>
    </div>
</section>
<?php
get_footer();
