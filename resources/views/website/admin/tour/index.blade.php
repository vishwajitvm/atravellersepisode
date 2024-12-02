@extends('website.websitemaster')

@section('websitespages')
<!--META DATA-->
@php
    //meta keywords
    $title = "Tour Categories" ;
    $metakeywordname = "AtravellersEpisode Keywords" ;
    $metakeywordContent = "Manage all tour categories including names, descriptions, and media.";

    //meta descriptions
    $metaDescriptionName = "AtravellersEpisode Description" ;
    $metaDescriptionContent = "Efficiently manage tour categories for your travel website.";
@endphp
<!--META DATA END-->

<main>
    <!-- Breadcrumbs Start -->
    <section class="breadcrumbs-area breadcrumb-bg">
        <div class="container">
            <h1 class="title wow fadeInUp" data-wow-delay="0.0s">Tour Categories</h1>
            <div class="breadcrumb-text">
                <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="breadcrumb listing">
                        <li class="breadcrumb-item single-list"><a href="{{ route('homepage') }}" class="single">Home</a></li>
                        <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single active">Tour Categories</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!--/ End-of Breadcrumbs-->

    <!-- Tour Categories Area Start -->
    <section class="destination-section bottom-padding1">
        <div class="destination-area">
            <div class="container">
                <!-- Info -->
                <div class="destination-details-info">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h4 class="title mb-0">Manage Tour Categories</h4>
                        <button class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="openAddForm()">Add New Category</button>
                    </div>
                    <div class="info-table">
                        @if ($categories->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th>Location</th>
                                        <th>Banner Images</th>
                                        <th>Banner Videos</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td style="max-width: 300px;">{{ $category->description }}</td>
                                        <td>{{ $category->location ?? 'N/A' }}</td>
                                        <td>
                                            @if ($category->banner_images)
                                                @foreach (json_decode($category->banner_images) as $image)
                                                    <img src="{{ asset($image) }}" alt="Banner Image" style="width: 50px; height: 50px; margin-right: 5px;">
                                                @endforeach
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if ($category->banner_videos)
                                                @foreach (json_decode($category->banner_videos) as $video)
                                                    <video width="50" height="50" controls>
                                                        <source src="{{ asset($video) }}" type="video/mp4">
                                                    </video>
                                                @endforeach
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="openEditForm({{ json_encode($category) }})">Edit</button>

                                            <form action="{{ route('admin.tour-category.destroy', $category->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No categories found. Please add a new one.</p>
                        @endif
                    </div>
                </div>
                <!-- /Info -->
            </div>
        </div>
    </section>
    <!--/ End-of Tour Categories-->

    <!-- Modal for Add/Edit -->
    <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="categoryForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="formMethod" name="_method" value="POST">
                    <input type="hidden" id="entryId" name="id">

                    <div class="modal-header">
                        <h5 class="modal-title" id="categoryModalLabel">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-4">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Description" rows="4" required></textarea>
                            </div>
                            <div class="col-sm-12">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Enter Location">
                            </div>
                            <div class="col-sm-12">
                                <label for="banner_images" class="form-label">Banner Images</label>
                                <input type="file" class="form-control" id="banner_images" name="banner_images[]" multiple onchange="previewImages()">
                                <div id="image-preview" class="mt-2"></div>
                            </div>
                            <div class="col-sm-12">
                                <label for="banner_videos" class="form-label">Banner Videos</label>
                                <input type="file" class="form-control" id="banner_videos" name="banner_videos[]" multiple onchange="previewVideos()">
                                <div id="video-preview" class="mt-2"></div>
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
            // Reset the form for adding a new entry
            document.getElementById('categoryForm').reset();
            document.getElementById('formMethod').value = 'POST';
            document.getElementById('categoryForm').action = "{{ route('admin.tour-category.store') }}";
            document.getElementById('categoryModalLabel').innerText = "Add New Category";
            document.getElementById('image-preview').innerHTML = '';
            document.getElementById('video-preview').innerHTML = '';
        }

        function openEditForm(data) {
            // Populate the form for editing an entry
            document.getElementById('categoryForm').reset();
            document.getElementById('formMethod').value = 'PUT';
            document.getElementById('categoryForm').action = "{{ route('admin.tour-category.update', ':id') }}".replace(':id', data.id);
            document.getElementById('name').value = data.name;
            document.getElementById('description').value = data.description;
            document.getElementById('location').value = data.location;
            document.getElementById('categoryModalLabel').innerText = "Edit Category";
            
            // Display existing images and videos
            displayExistingMedia(data.banner_images, 'image-preview');
            displayExistingMedia(data.banner_videos, 'video-preview');
        }

        function previewImages() {
            const files = document.getElementById('banner_images').files;
            const previewContainer = document.getElementById('image-preview');
            previewContainer.innerHTML = '';
            Array.from(files).forEach(file => {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(file);
                img.style.width = '100px';
                img.style.marginRight = '5px';
                previewContainer.appendChild(img);
            });
        }

        function previewVideos() {
            const files = document.getElementById('banner_videos').files;
            const previewContainer = document.getElementById('video-preview');
            previewContainer.innerHTML = '';
            Array.from(files).forEach(file => {
                const video = document.createElement('video');
                video.width = 100;
                video.height = 100;
                const source = document.createElement('source');
                source.src = URL.createObjectURL(file);
                video.appendChild(source);
                previewContainer.appendChild(video);
            });
        }

        function displayExistingMedia(mediaData, containerId) {
            const container = document.getElementById(containerId);
            container.innerHTML = '';
            if (mediaData) {
                const media = JSON.parse(mediaData);
                media.forEach(item => {
                    if (containerId === 'image-preview') {
                        const img = document.createElement('img');
                        img.src = `{{ asset('${item}') }}`;
                        img.style.width = '100px';
                        img.style.marginRight = '5px';
                        container.appendChild(img);
                    } else if (containerId === 'video-preview') {
                        const video = document.createElement('video');
                        video.width = 100;
                        video.height = 100;
                        const source = document.createElement('source');
                        source.src = `{{ asset('${item}') }}`;
                        video.appendChild(source);
                        container.appendChild(video);
                    }
                });
            }
        }
    </script>

</main>
@endsection
