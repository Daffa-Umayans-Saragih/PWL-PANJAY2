<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('title', 'Our Experience')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Experience - Our Civilization of Art</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="max-w-screen-xl mx-auto px-6 md:px-10 py-4 flex items-center bg-white" aria-label="Breadcrumb">
        <!-- Icon Home -->
        <a href="/" class="text-black hover:text-black transition-colors duration-200">
            <svg class="w-3 h-3 transition-all duration-200 fill-none hover:fill-black" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
        </a>

        <!-- Separator -->
        <span class="mx-2.5 text-black font-extralight text-sm">/</span>

        <!-- Link Plan Your Visit -->
        <a href="/plan-your-visit" class="text-black text-xs hover:underline tracking-wide transition-all duration-200">
            Plan Your Visit
        </a>

        <!-- Separator -->
        <span class="mx-2.5 text-gray-400 font-extralight text-sm">/</span>

        <!-- Active Page -->
        <span class="text-black text-xs font-semibold">Our Experience</span>
    </nav>

    <section class="experience-hero">
        <!-- Bagian Title -->
        <h1 class="experience-title">
            Our Experience
        </h1>

        <!-- Bagian Subtitle -->
        <p class="experience-subtitle">
            Explore unique visual displays, curated galleries, and custom guides for an unforgettable journey.
        </p>
    </section>

    <!-- Grid Container -->
    <div class="experience-grid">

        <!-- LEFT SIDE (Content & Cards) - Takes 2 columns on large screens -->
        <div class="lg:col-span-2">
            <div class="experience-body">
                <p class="experience-lead">Discover Our World of Art</p>
                <p class="mb-6">
                    We invite you to step inside a space designed to connect history and modernity through curated showcases, 
                    dynamic lighting installations, and expert-led narratives.
                </p>
                
                <div class="experience-card">
                    <h3 class="experience-card-title">Interactive Galleries</h3>
                    <p class="experience-card-text">
                        Engage with historic collections using cutting-edge visual layouts designed for absolute immersion. 
                        Every corner reveals a story waiting to be explored.
                    </p>
                </div>

                <div class="experience-card">
                    <h3 class="experience-card-title">Curated Journeys</h3>
                    <p class="experience-card-text">
                        Follow our tailor-made itineraries that guide you through iconic masterpieces and hidden gems, 
                        providing context and history for all ages.
                    </p>
                </div>

                <div class="experience-card">
                    <h3 class="experience-card-title">Exclusive Exhibitions</h3>
                    <p class="experience-card-text">
                        Access temporary displays and seasonal collections featuring rare pieces on loan from around the globe, 
                        brought together for a limited time.
                    </p>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE (Contact & Support Sidebar) -->
        <div class="lg:col-span-1">
            <div class="bg-gray-50 border border-gray-100 rounded-lg p-6 sticky top-6">
                <h3 class="sidebar-contact-title">Contact & Support</h3>
                <p class="sidebar-contact-body mb-4">
                    If you have specific inquiries about your visiting plans, group bookings, or private events, 
                    please contact our guest relations team.
                </p>
                <p class="text-sm font-semibold text-black">
                    Email: <a href="mailto:support@ocmuseum.org" class="experience-inline-link">support@ocmuseum.org</a>
                </p>
                <p class="text-sm font-semibold text-black mt-2">
                    Phone: <span class="text-gray-700 font-normal">+1 (800) 555-0199</span>
                </p>
            </div>
        </div>

    </div>
</body>
@endsection
</html>
