@extends('Layouts.master')
@section('content')
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>Our <span class="orange-text">Categories</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                </div>
                 <div id="form_status"></div>
                <div class="contact-form">
                    <form method="POST" action="{{ route('storeproduct') }}">
                        @csrf
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name" style="width: 100%" value="{{ old('name') }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </p>
                        <p>
                            <input type="number" placeholder="Price" name="price" id="email" style="width: 100%" value="{{ old('price') }}">
                            <span class="text-danger">
                                @error('number')
                                    {{ $message }}
                                @enderror
                            </span>
                        </p>

                        <p>
                            <input type="nubmer" placeholder="Quantity" name="quantity" id="quantity" style="width: 100%;margin-bottom:20px;padding: 10px;border-radius: 5px;" value="{{ old('quantity') }}">
                            <span class="text-danger">
                                @error('quantity')
                                    {{ $message }}
                                @enderror
                            </span>
                        </p>
                        <p>
                            <input type="text" placeholder="Subject" name="subject" id="subject" style="width: 100%" value="{{ old('subject') }}">
                            <span class="text-danger">
                                @error('subject')
                                    {{ $message }}
                                @enderror
                            </span>
                        </p>

                        <p><textarea name="description" id="description" cols="30" rows="10" placeholder="description" value="{{ old('description') }}"></textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                            <p>
                                <select name="category_id" id="category_id" style="width: 100%; margin-bottom:20px; padding: 10px; border-radius: 5px;">
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach ($allcategories as $item)
                                        <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('category_id')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </p>
                            <div>
                                <label for="image">ارفع الصورة:</label>
                                <input type="file" name="imagepath" id="imagepath" required>
                            </div>
                            <br>
                        <p><input type="submit" value="Submit"></p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> Shop Address</h4>
                        <p>34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> Shop Hours</h4>
                        <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                        <p>Phone: +00 111 222 3333 <br> Email: support@fruitkha.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
