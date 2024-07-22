@extends('welcome')

@section('content')
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Contact Us
    </h3>

    <section>
        <p>If you have any questions or suggestions about our Privacy Policy, please fill out the form below to contact us:</p>
    </section>

    <section>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection
