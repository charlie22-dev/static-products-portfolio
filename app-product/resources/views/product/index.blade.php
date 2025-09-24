@extends('layouts.product')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')


<section id="main" class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center text-md-start">
                <h1>{{ $portfolio['name'] }}</h1>
                <h3 class="mb-4">{{ $portfolio['title'] }}</h3>
                <p>{{ $portfolio['bio'] }}</p>
            </div>

            <div class="col-12 col-md-6 text-center right">
                <img src="{{ $portfolio['profile_image'] }}" 
                     alt="your-image" 
                     class="img-fluid rounded" />
            </div>
        </div>
    </div>
</section>


<section id="abouts" class="py-5">
    <div class="container">
        <h1 class="mb-4">PROJECTS</h1>
        @foreach($abouts as $project)
            <div class="mb-4">
                <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="img-fluid mb-2">
                <h3>{{ $project['name'] }}</h3>
                <p>{{ $project['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>


<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4">Testimonials</h2>
        @foreach ($portfolio['testimonials'] as $exp)
            <div class="testimonials mb-4">
                <img src="{{ $exp['image'] }}" alt="testimonial" class="img-fluid mb-2">
                <p>{{ $exp['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>


<section id="contacts" class="py-5">
    <div class="container">
        <h1 class="mb-4">CONTACT ME</h1>
        <form action="your-email@example.com" method="post" enctype="text/plain">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Mobile Number</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 234 567 8901" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Type your message here..." required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</section>


<footer class="py-3 bg-dark text-white">
    <div class="container text-center">
        <p>&copy; 2025 Charlie — All rights reserved</p>
    </div>
</footer>

@endsection
