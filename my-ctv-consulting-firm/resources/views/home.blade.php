@extends('welcome')

@section('content')
    <section class="section">
        <div class="container">
            <h1 class="title">Welcome to Our CTV Consulting Firm</h1>
            <p class="subtitle">We specialize in CTV advertising solutions</p>

            {{--        Email Subscription Form --}}

            <form action="{{ route('subscribe') }}" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input " type="text" name="name" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" name="email" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary" type="submit">Subscribe</button>

                    </div>

                </div>

            </form>

            @if(session('success'))
                <div class="notification is-success">
                    {{ session('success') }}}
                </div>
            @endif

        </div>

    </section>
@endsection
