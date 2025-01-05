@extends('website.websitemaster')

@section('websitespages')
<!--META DATA-->
@php
    // Meta keywords and descriptions
    $title = "Tour Details";
    $metakeywordname = "AtravellersEpisode Tour Details";
    $metakeywordContent = "Manage tour details including name, description, duration, price, and media.";

    $metaDescriptionName = "AtravellersEpisode Tour Management";
    $metaDescriptionContent = "Efficiently manage detailed information about tours.";
@endphp
<!--META DATA END-->

<main>
    <!-- Breadcrumbs Start -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Tour Details</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">Tour Details</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--/ End-of Breadcrumbs -->

    <!-- Tour Details Section Start -->
    <section class="destination-section bottom-padding1">
        <div class="destination-area">
            <div class="container">
                <!-- Info -->
                <div class="destination-details-info">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="title mb-0">Manage Tour Details</h4>
                        <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#tourModal" onclick="openAddForm()">Add New Tour</button>
                    </div>
                    <div class="info-table">
                        @if ($tours->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Duration</th>
                                        <th>Price</th>
                                        <th>Includes</th>
                                        <th>Excludes</th>
                                        <th>Tour Plans</th>
                                        <th>Images</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tours as $tour)
                                    <tr>
                                        <td>{{ $tour->name }}</td>
                                        <td>{{ $tour->category->name ?? 'N/A' }}</td>
                                        <td>{{ $tour->location ?? 'N/A' }}</td>
                                        <td>{{ $tour->duration }}</td>
                                        <td>₹{{ number_format($tour->price, 2) }}</td>
                                        <td>
                                            <ul>
                                                @foreach (json_decode($tour->includes) as $include)
                                                    <li>{{ $include }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach (json_decode($tour->excludes) as $exclude)
                                                    <li>{{ $exclude }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            @foreach (json_decode($tour->tour_plans) as $plan)
                                                <strong>{{ $plan->heading }}</strong>: {{ $plan->description }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach (json_decode($tour->banner_images) as $image)
                                                <img src="{{ asset($image) }}" alt="Tour Image" style="width: 50px; height: 50px; margin-right: 5px;">
                                            @endforeach
                                        </td>
                                        <td>{{ ucfirst($tour->status) }}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#tourModal" onclick="openEditForm({{ json_encode($tour) }})">Edit</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No tours found. Please add a new one.</p>
                        @endif
                    </div>
                </div>
                <!-- /Info -->
            </div>
        </div>
    </section>
    <!--/ End-of Tour Details -->

    <!-- Modal for Add/Edit -->
    <div class="modal fade" id="tourModal" tabindex="-1" aria-labelledby="tourModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="tourForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="entryId" name="id">

                    <div class="modal-header">
                        <h5 class="modal-title" id="tourModalLabel">Add New Tour</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Tour Name" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="tour_category_id" class="form-label">Category</label>
                                <select class="form-control" id="tour_category_id" name="tour_category_id">
                                    <option value="">Select Category</option>
                                    @foreach ($tourcategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Description" rows="4" required></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label for="duration" class="form-label">Duration</label>
                                <input type="text" class="form-control" id="duration" name="duration" placeholder="e.g., 5 Days 4 Nights">
                            </div>
                            <div class="col-sm-12">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Enter Price">
                            </div>
                            <div class="col-sm-12">
                                <label for="includes" class="form-label">Includes</label>
                                <textarea class="form-control" id="includes" name="includes" rows="2" placeholder="Separate items with a comma"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label for="excludes" class="form-label">Excludes</label>
                                <textarea class="form-control" id="excludes" name="excludes" rows="2" placeholder="Separate items with a comma"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label for="banner_images" class="form-label">Banner Images</label>
                                <input type="file" class="form-control" id="banner_images" name="banner_images[]" multiple onchange="previewImages()">
                                <div id="image-preview" class="mt-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Modal for Add/Edit -->

    <script>
        function openAddForm() {
            document.getElementById('tourForm').reset();
            document.getElementById('formMethod').value = 'POST';
            document.getElementById('tourForm').action = "{{ route('tour.details.store') }}";
        }

        function openEditForm(data) {
            document.getElementById('tourForm').reset();
            document.getElementById('formMethod').value = 'PUT';
            document.getElementById('tourForm').action = "{{ route('tour.details.update', ':id') }}".replace(':id', data.id);
        }
    </script>
</main>
@endsection
