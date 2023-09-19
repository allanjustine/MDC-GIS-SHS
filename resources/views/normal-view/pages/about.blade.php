@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex items-center justify-center mt-10">
            <div class="max-w-[900px] bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-4">
                    <h1 class="text-4xl font-bold mb-4 text-indigo-900 text-center">
                        About Us
                    </h1>
                    <p class="text-center">
                        Welcome to <strong>Mater Dei College</strong>, where excellence in education
                        meets a nurturing environment. We are dedicated to
                        providing students with a well-rounded education that
                        empowers them to reach their full potential and become
                        responsible global citizens.
                    </p>
                    <p class="text-center">
                        Our mission is to inspire a lifelong love of learning
                        and instill values that promote leadership, integrity,
                        and community engagement. Here's what sets us apart:
                    </p>
                    <ul class="list-none ml-6 mt-4">
                        <li class="border rounded p-4 my-2 shadow">
                            <strong>Experienced Educators:</strong> Our
                            passionate and experienced teachers are committed to
                            academic excellence and fostering personal growth.
                        </li>
                        <li class="border rounded p-4 my-2 shadow">
                            <strong>Modern Facilities:</strong> We provide
                            state-of-the-art facilities and resources to support
                            innovative teaching and learning.
                        </li>
                        <li class="border rounded p-4 my-2 shadow">
                            <strong>Comprehensive Curriculum:</strong> Our
                            curriculum is designed to challenge and engage
                            students, preparing them for success in an
                            ever-changing world.
                        </li>
                        <li class="border rounded p-4 my-2 shadow">
                            <strong>Extracurricular Activities:</strong> We
                            offer a wide range of extracurricular activities to
                            develop talents and interests outside the classroom.
                        </li>
                        <li class="border rounded p-4 my-2 shadow">
                            <strong>Community Engagement:</strong> We encourage
                            community involvement and service, fostering a sense
                            of social responsibility.
                        </li>
                    </ul>
                    <p class="text-center mt-4">
                        At <strong>Mater Dei College</strong>, we believe that education is the key
                        to a brighter future. Join us in shaping the leaders of
                        tomorrow.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
