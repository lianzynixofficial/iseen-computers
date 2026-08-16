@extends('layouts.public')

@section('title', 'I Seen Computer | Designing,Typing & Printing Services')

@push('styles')
    @vite('resources/css/contact.css')
@endpush

@section('content')

<div class="contact-page">

    @include('frontend.partials.navbar')

    <main class="contact-main">

        <section class="contact-section">

            <div class="contact-container">

                <div class="contact-header">

                    <p class="contact-eyebrow">
                        GET IN TOUCH
                    </p>

                    <h1>
                        Contact I Seen Computer
                    </h1>

                    <p>
                        Have a printing or designing requirement?
                        Send us your details and we will get back to you.
                    </p>

                </div>

                @if (session('success'))
                    <div
                        class="contact-alert contact-alert--success"
                        role="alert"
                    >
                        {{ session('success') }}
                    </div>
                @endif

                <form
                    method="POST"
                    action="{{ route('contact.store') }}"
                    class="contact-form"
                >
                    @csrf

                    <div class="contact-form-grid">

                        <div class="contact-field">

                            <label for="name">
                                Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                            >

                            @error('name')
                                <p class="contact-error" role="alert">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <div class="contact-field">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                            >

                            @error('email')
                                <p class="contact-error" role="alert">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <div class="contact-field">

                            <label for="phone">
                                Phone
                            </label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                autocomplete="tel"
                            >

                            @error('phone')
                                <p class="contact-error" role="alert">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <div class="contact-field">

                            <label for="subject">
                                Subject
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                            >

                            @error('subject')
                                <p class="contact-error" role="alert">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>


                    <div class="contact-field">

                        <label for="message">
                            Message
                        </label>

                        <textarea
                            id="message"
                            name="message"
                            rows="7"
                            required
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <p class="contact-error" role="alert">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>


                    <div class="contact-form-footer">

                        <button
                            type="submit"
                            class="contact-submit"
                        >
                            Send Enquiry
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

    @include('frontend.partials.footer')

</div>

@endsection

{{-- @push('scripts')
    @vite('resources/js/home.js')
@endpush --}}
