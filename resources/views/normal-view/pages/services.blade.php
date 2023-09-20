@extends('normal-view.layout.base')

@include('normal-view.layout.navbar')

@section('title')
    Services
@endsection

@section('content')
    <div class="container mx-auto p-4">
        <div class="flex items-center justify-center mt-10">
            <div class="max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-cover bg-center h-64 p-4" style="background-image: url('/images/bg2.png')"></div>
                <div class="p-4">
                    <h1 class="text-4xl font-bold mb-4 text-indigo-900 text-center">
                        Services
                    </h1>
                    <p class="mb-4">
                        We offer a wide range of services to meet the needs of
                        our students and promote their academic and personal
                        growth. Our services include:
                    </p>
                    <ul class="list-decimal ml-6">
                        <li>
                            Education Programs: Offering a range of academic
                            programs, including standard and advanced courses to
                            cater to students with varying abilities and
                            interests.
                        </li>
                        <li>
                            Extracurricular Activities: Providing a diverse
                            array of extracurricular activities such as sports,
                            music, drama, art, and clubs to enhance students'
                            personal development.
                        </li>
                        <li>
                            Counseling Services: Offering counseling and
                            guidance services to support students' emotional
                            well-being and help them navigate academic and
                            personal challenges.
                        </li>
                        <li>
                            Library Resources: Maintaining a well-equipped
                            library with a wide selection of books, digital
                            resources, and research materials for students'
                            academic needs.
                        </li>
                        <li>
                            Tutoring and Academic Support: Providing additional
                            tutoring and academic support for students who
                            require extra assistance in specific subjects or
                            skills.
                        </li>
                        <li>
                            Career Guidance: Offering career counseling,
                            workshops, and resources to help students explore
                            career options and make informed decisions about
                            their future.
                        </li>
                        <li>
                            Health and Wellness Programs: Promoting physical and
                            mental well-being through health education, fitness
                            programs, and access to healthcare resources.
                        </li>
                        <li>
                            Technology Resources: Ensuring access to up-to-date
                            technology, including computer labs and online
                            learning platforms, to enhance digital literacy and
                            learning experiences.
                        </li>
                        <li>
                            Community Engagement: Encouraging community
                            involvement through partnerships, service-learning
                            opportunities, and volunteering to instill a sense
                            of civic responsibility.
                        </li>
                        <li>
                            Parent-Teacher Collaboration: Facilitating
                            communication and collaboration between parents and
                            teachers through meetings, workshops, and online
                            platforms to support students' overall development.
                        </li>
                    </ul>
                    <p class="mt-4">
                        Explore our services to learn more about how we support
                        our students on their educational journey. These
                        services contribute to a holistic educational experience
                        that addresses the academic, social, emotional, and
                        physical needs of students while preparing them for
                        future success. Keep in mind that the specific services
                        offered by a school may vary depending on its level
                        (e.g., elementary, middle, high school) and mission.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
