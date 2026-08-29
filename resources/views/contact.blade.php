<form action="{{ route('contact.store') }}" method="POST">
    @csrf
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                   placeholder="Your Name" value="{{ old('name') }}">
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6 mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                   placeholder="Your Email" value="{{ old('email') }}">
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" name="phone" class="form-control" placeholder="Phone (optional)">
        </div>
        <div class="col-md-6 mb-3">
            <select name="service" class="form-control">
                <option value="">Select a Service</option>
                <option value="software">Software Development</option>
                <option value="ai">AI Automations</option>
                <option value="marketing">Digital Marketing</option>
                <option value="seo">SEO</option>
                <option value="shopify">Shopify Ecommerce</option>
                <option value="mobile">Mobile Applications</option>
            </select>
        </div>
        <div class="col-12 mb-3">
            <textarea name="message" rows="6" class="form-control @error('message') is-invalid @enderror"
                      placeholder="Your Message">{{ old('message') }}</textarea>
            @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
        </div>
    </div>
</form>